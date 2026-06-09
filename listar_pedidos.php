<?php
require_once "conexao.php";
$sql = "SELECT * FROM Pedidos ORDER BY data_pedido DESC";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$pedidos = $stmt->fetchAll();
$total = count($pedidos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Pedidos</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
<div class="card">
<h1>Pedidos Cadastrados (<?= $total ?>)</h1>
<a href="index_pedidos.php" class="btn-primary">+ Novo Pedido</a>
<table>
<tr><th>ID</th><th>ID Cliente</th><th>Data</th><th>Status</th><th>Ações</th></tr>
<?php foreach ($pedidos as $p): ?>
<tr>
  <td><?= $p['id_pedido'] ?></td>
  <td><?= $p['id_cliente'] ?></td>
  <td><?= htmlspecialchars($p['data_pedido']) ?></td>
  <td><?= htmlspecialchars($p['status']) ?></td>
  <td>
    <a href="editar_pedidos.php?id=<?= $p['id_pedido'] ?>" class="btn-edit">Editar</a>
    <a href="deletar_pedidos.php?id=<?= $p['id_pedido'] ?>" class="btn-del" onclick="return confirm('Excluir este pedido?')">Excluir</a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</div>
</body>
</html>
