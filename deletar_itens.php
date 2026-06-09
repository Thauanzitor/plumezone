<?php
require_once "conexao.php";
$id = (int)($_GET['id'] ?? 0);

$check = $conexao->prepare("SELECT id_item FROM Itens_Pedido WHERE id_item = :id LIMIT 1");
$check->bindParam(':id', $id, PDO::PARAM_INT);
$check->execute();
if (!$check->fetch()) {
    header('Location: listar_itens.php'); exit;
}

$sql = "DELETE FROM Itens_Pedido WHERE id_item = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();

header("Location: listar_itens.php?msg=deletado");
