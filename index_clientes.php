<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastrar Cliente</title>
<link rel="stylesheet" href="estolor.css">
</head>
<body>
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <p class ="plume">PLUME</p>
<div class ="pluma"></div>
<div class="card">
<h1>Cadastrar Cliente</h1>
<form action="salvar_clientes.php" method="POST">
  <label>Nome:</label>
  <input type="text" name="nome" required>
  <label>Email:</label>
  <input type="email" name="email" required>
  <label>Telefone:</label>
  <input type="text" name="telefone" required>
  <button type="submit" class="btn-primary">Salvar Cliente</button>
  <a href="listar_clientes.php" class="btn-primary">Ver Clientes</a>
</form>
</div>
</body>
</html>
