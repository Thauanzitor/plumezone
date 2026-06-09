<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Item</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <p class ="plume">PLUME</p>
<div class ="pluma"></div>
<div class="card">
<h1>Cadastrar Item de Pedido</h1>
<form action="salvar_itens.php" method="POST">
  <label>ID Pedido:</label>
  <input type="number" name="id_pedido" required>
  <label>ID Produto:</label>
  <input type="number" name="id_produto" required>
  <label>Quantidade:</label>
  <input type="number" name="quantidade" required>
  <button type="submit" class="btn-primary">Salvar Item</button>
  <a href="listar_itens.php" class="btn-primary">Ver Itens</a>
</form>
</div>
</body>
</html>
