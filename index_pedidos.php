<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Pedido</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <p class ="plume">PLUME</p>
<div class ="pluma"></div>
<div class="card">
<h1>Cadastrar Pedido</h1>
<form action="salvar_pedidos.php" method="POST">
  <label>ID Cliente:</label>
  <input type="number" name="id_cliente" required>
  <label>Data do Pedido:</label>
  <input type="date" name="data_pedido" required>
  <label>Status:</label>
  <input type="text" name="status" value="Pendente">
  <button type="submit" class="btn-primary">Salvar Pedido</button>
  <a href="listar_pedidos.php" class="btn-primary">Ver Pedidos</a>
</form>
</div>
</body>
</html>



</body>
</html>
