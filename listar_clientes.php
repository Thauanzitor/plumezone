<?php
require_once "conexao.php";
$sql = "SELECT * FROM Clientes ORDER BY nome ASC";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$clientes = $stmt->fetchAll();
$total = count($clientes);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Clientes</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
<div class="card">
<h1>Clientes Cadastrados (<?= $total ?>)</h1>
<a href="index_clientes.php" class="btn-primary">+ Novo Cliente</a>
<table>
<tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th></tr>
<?php foreach ($clientes as $c): ?>
<tr>
  <td><?= $c['id_cliente'] ?></td>
  <td><?= htmlspecialchars($c['nome']) ?></td>
  <td><?= htmlspecialchars($c['email']) ?></td>
  <td><?= htmlspecialchars($c['telefone']) ?></td>
  <td>
    <a href="editar_clientes.php?id=<?= $c['id_cliente'] ?>" class="btn-edit">Editar</a>
    <a href="deletar_clientes.php?id=<?= $c['id_cliente'] ?>" class="btn-del" onclick="return confirm('Excluir este cliente?')">Excluir</a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</div>
</body>
</html>
