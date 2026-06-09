<?php
require_once "conexao.php";

$id = (int)($_POST['id'] ?? 0);
$id_cliente = (int)($_POST['id_cliente'] ?? 0);
$data_pedido = $_POST['data_pedido'] ?? "";
$status = trim($_POST['status'] ?? "");

if ($id <= 0 || $id_cliente <= 0 || empty($data_pedido) || empty($status)) {
    die("Dados inválidos. Verifique os campos.");
}

$sql = "UPDATE Pedidos SET id_cliente=:id_cliente, data_pedido=:data_pedido, status=:status WHERE id_pedido=:id";
$stmt = $conexao->prepare($sql);
$stmt->execute([
    ':id_cliente'=>$id_cliente,
    ':data_pedido'=>$data_pedido,
    ':status'=>$status,
    ':id'=>$id
]);

header("Location: listar_pedidos.php?msg=atualizado");
