<?php
require_once "conexao.php";
$id = (int)($_GET['id'] ?? 0);
$sql = "SELECT * FROM Itens_Pedido WHERE id_item=:id LIMIT 1";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$item = $stmt->fetch();
if (!$item) { header("Location: listar_itens.php"); exit; }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Editar Item</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
<div class="card">
<h1>Editar Item de Pedido</h1>
<form action="atualizar_itens.php" method="POST">
  <input type="hidden" name="id" value="<?= $item['id_item'] ?>">
  <label>ID Pedido:</label>
  <input type="number" name="id_pedido" value="<?= $item['id_pedido'] ?>" required>
  <label>ID Produto:</label>
  <input type="number" name="id_produto" value="<?= $item['id_produto'] ?>" required>
  <label>Quantidade:</label>
  <input type="number" name="quantidade" value="<?= $item['quantidade'] ?>" required>
  <button type="submit" class="btn-primary">Salvar Alterações</button>
</form>
<a href="listar_itens.php" class="btn-primary">Voltar</a>
</div>
</body>
</html>
