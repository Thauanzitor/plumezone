<?php
require_once "conexao.php";

$id = (int)($_POST['id'] ?? 0);
$id_pedido = (int)($_POST['id_pedido'] ?? 0);
$id_produto = (int)($_POST['id_produto'] ?? 0);
$quantidade = (int)($_POST['quantidade'] ?? 0);

if ($id <= 0 || $id_pedido <= 0 || $id_produto <= 0 || $quantidade <= 0) {
    die("Dados inválidos. Verifique os campos.");
}

$sql = "UPDATE Itens_Pedido 
        SET id_pedido=:id_pedido, id_produto=:id_produto, quantidade=:quantidade 
        WHERE id_item=:id";
$stmt = $conexao->prepare($sql);
$stmt->execute([
    ':id_pedido'=>$id_pedido,
    ':id_produto'=>$id_produto,
    ':quantidade'=>$quantidade,
    ':id'=>$id
]);

header("Location: listar_itens.php?msg=atualizado");
