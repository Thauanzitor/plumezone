<?php
require_once "conexao.php";
$id = (int)($_GET['id'] ?? 0);
$sql = "SELECT * FROM Clientes WHERE id_cliente=:id LIMIT 1";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$cliente = $stmt->fetch();
if (!$cliente) { header("Location: listar_clientes.php"); exit; }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Cliente</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
<div class="card">
<h1>Editar Cliente</h1>
<form action="atualizar_clientes.php" method="POST">
  <input type="hidden" name="id" value="<?= $cliente['id_cliente'] ?>">
  <label>Nome:</label>
  <input type="text" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required>
  <label>Email:</label>
  <input type="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required>
  <label>Telefone:</label>
  <input type="text" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" required>
  <button type="submit" class="btn-primary">Salvar Alterações</button>
</form>
<a href="listar_clientes.php" class="btn-primary">Voltar</a>
</div>
</body>
</html>
