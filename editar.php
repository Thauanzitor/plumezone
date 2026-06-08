<?php
require_once "conexao.php";
$id = (int)($_GET['id'] ?? 0);
$sql = "SELECT * FROM Produtos WHERE id_produto=:id LIMIT 1";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$produto = $stmt->fetch();
if (!$produto) { header("Location: listar.php"); exit; }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Produto</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
<h1># Editar Produto</h1>
<form action="atualizar.php" method="POST">
  <input type="hidden" name="id" value="<?= $produto['id_produto'] ?>">
  <label>Nome:</label>
  <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required>
  <label>Preço:</label>
  <input type="number" step="0.01" name="preco" value="<?= htmlspecialchars($produto['preco']) ?>" required>
  <label>Estoque:</label>
  <input type="number" name="estoque" value="<?= htmlspecialchars($produto['estoque']) ?>" required>
  <button type="submit" class="btn-primary">Salvar Alterações</button>
</form>
<a href="listar.php" class="btn-primary">Voltar</a>
</div>
</body>
</html>
