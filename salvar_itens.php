<?php
require_once "conexao.php";

$id_pedido = (int)($_POST["id_pedido"] ?? 0);
$id_produto = (int)($_POST["id_produto"] ?? 0);
$quantidade = (int)($_POST["quantidade"] ?? 0);

if ($id_pedido <= 0 || $id_produto <= 0 || $quantidade <= 0) {
    header("Location: index_itens.php?erro=Campos obrigatórios"); exit;
}

$sql = "INSERT INTO Itens_Pedido (id_pedido, id_produto, quantidade) VALUES (:id_pedido, :id_produto, :quantidade)";
$stmt = $conexao->prepare($sql);
$stmt->execute([':id_pedido'=>$id_pedido, ':id_produto'=>$id_produto, ':quantidade'=>$quantidade]);

header("Location: listar_itens.php?msg=sucesso");
