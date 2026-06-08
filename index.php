<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Produto</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
  <img src="imagem.jpg" alt="">
<div class="card">
<h1>+ Cadastrar Produto</h1>
<form action="salvar.php" method="POST">
  <label>Nome:</label>
  <input type="text" name="nome" required>
  <label>Preço:</label>
  <input type="number" step="0.01" name="preco" required>
  <label>Estoque:</label>
  <input type="number" name="estoque" required>
  <button type="submit" class="btn-primary">Salvar Produto</button>
</form>
<a href="listar.php" class="btn-primary">Ver Produtos</a>
</div>
</body>
</html>
