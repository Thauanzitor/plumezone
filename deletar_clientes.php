<?php
require_once "conexao.php";
$id = (int)($_GET['id'] ?? 0);

$check = $conexao->prepare("SELECT id_cliente FROM Clientes WHERE id_cliente = :id LIMIT 1");
$check->bindParam(':id', $id, PDO::PARAM_INT);
$check->execute();
if (!$check->fetch()) {
    header('Location: listar_clientes.php'); exit;
}

$sql = "DELETE FROM Clientes WHERE id_cliente = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();

header("Location: listar_clientes.php?msg=deletado");
