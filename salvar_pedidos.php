<?php
require_once "conexao.php";

$id_cliente = (int)($_POST["id_cliente"] ?? 0);
$data_pedido = $_POST["data_pedido"] ?? "";
$status = trim($_POST["status"] ?? "Pendente");

if ($id_cliente <= 0 || empty($data_pedido)) {
    header("Location: index_pedidos.php?erro=Campos obrigatórios"); exit;
}

$sql = "INSERT INTO Pedidos (id_cliente, data_pedido, status) VALUES (:id_cliente, :data_pedido, :status)";
$stmt = $conexao->prepare($sql);
$stmt->execute([':id_cliente'=>$id_cliente, ':data_pedido'=>$data_pedido, ':status'=>$status]);

header("Location: listar_pedidos.php?msg=sucesso");
