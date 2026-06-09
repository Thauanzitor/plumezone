<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Produto</title>
<link rel="stylesheet" href="estolor.css">
</head>

<body>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <p class ="plume">PLUME</p>
<div class ="pluma"></div>
<div class="card">
<h1>Cadastrar Produto</h1>
<form action="salvar_produtos.php" method="POST">
  <label>Nome:</label>
  <input type="text" name="nome" required>
  <label>Preço:</label>
  <input type="number" step="0.01" name="preco" required>
  <label>Estoque:</label>
  <input type="number" name="estoque" required>
  <div class="botoes">
    <button type="submit" class="btn-primary">Salvar Produto</button>
    <a href="listar_produtos.php" class="btn-primary">Ver Produtos</a>
  </div>
</form>


</body>
</html>
