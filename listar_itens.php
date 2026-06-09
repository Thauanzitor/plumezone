<?php
require_once "conexao.php";
$sql = "SELECT * FROM Itens_Pedido ORDER BY id_item ASC";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$itens = $stmt->fetchAll();
$total = count($itens);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Itens</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
<div class="card">
<h1>Itens de Pedido (<?= $total ?>)</h1>
<a href="index_itens.php" class="btn-primary">+ Novo Item</a>
<table>
<tr><th>ID</th><th>ID Pedido</th><th>ID Produto</th><th>Quantidade</th><th>Ações</th></tr>
<?php foreach ($itens as $i): ?>
<tr>
  <td><?= $i['id_item'] ?></td>
  <td><?= $i['id_pedido'] ?></td>
  <td><?= $i['id_produto'] ?></td>
  <td><?= $i['quantidade'] ?></td>
  <td>
    <a href="editar_itens.php?id=<?= $i['id_item'] ?>" class="btn-edit">Editar</a>
    <a href="deletar_itens.php?id=<?= $i['id_item'] ?>" class="btn-del" onclick="return confirm('Excluir este item?')">Excluir</a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</div>
</body>
</html>
