<?php
require_once "conexao.php";
$id = (int)($_GET['id'] ?? 0);

$check = $conexao->prepare("SELECT id_pedido FROM Pedidos WHERE id_pedido = :id LIMIT 1");
$check->bindParam(':id', $id, PDO::PARAM_INT);
$check->execute();
if (!$check->fetch()) {
    header('Location: listar_pedidos.php'); exit;
}

$sql = "DELETE FROM Pedidos WHERE id_pedido = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();

header("Location: listar_pedidos.php?msg=deletado");
