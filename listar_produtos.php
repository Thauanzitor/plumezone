<?php
require_once "conexao.php";
$sql = "SELECT * FROM Produtos ORDER BY nome ASC";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll();
$total = count($produtos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Produtos</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
<div class="card">
<h1>= Produtos Cadastrados (<?= $total ?>)</h1>
<a href="index_produtos.php" class="btn-primary">+ Novo Produto</a>
<table>
<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Ações</th></tr>
<?php foreach ($produtos as $p): ?>
<tr>
  <td><?= $p['id_produto'] ?></td>
  <td><?= htmlspecialchars($p['nome']) ?></td>
  <td><?= htmlspecialchars($p['preco']) ?></td>
  <td><?= htmlspecialchars($p['estoque']) ?></td>
  <td>
    <a href="editar_produtos.php?id=<?= $p['id_produto'] ?>" class="btn-edit">Editar</a>
    <a href="deletar_produtos.php?id=<?= $p['id_produto'] ?>" class="btn-del" onclick="return confirm('Excluir este produto?')">Excluir</a>
  </td>
</tr>
<?php endforeach; ?>
</table>
</div>
</body>
</html>
