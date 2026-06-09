<?php
require_once "conexao.php";
$id = (int)($_GET['id'] ?? 0);
$sql = "SELECT * FROM Pedidos WHERE id_pedido=:id LIMIT 1";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$pedido = $stmt->fetch();
if (!$pedido) { header("Location: listar_pedidos.php"); exit; }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Pedido</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
<div class="card">
<h1>Editar Pedido</h1>
<form action="atualizar_pedidos.php" method="POST">
  <input type="hidden" name="id" value="<?= $pedido['id_pedido'] ?>">
  <label>ID Cliente:</label>
  <input type="number" name="id_cliente" value="<?= $pedido['id_cliente'] ?>" required>
  <label>Data do Pedido:</label>
  <input type="date" name="data_pedido" value="<?= $pedido['data_pedido'] ?>" required>
  <label>Status:</label>
  <input type="text" name="status" value="<?= htmlspecialchars($pedido['status']) ?>" required>
  <button type="submit" class="btn-primary">Salvar Alterações</button>
</form>
<a href="listar_pedidos.php" class="btn-primary">Voltar</a>
</div>
</body>
</html>
