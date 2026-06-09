<?php
require_once "conexao.php";

$id = (int)($_POST['id'] ?? 0);
$nome = trim($_POST['nome'] ?? "");
$email = trim($_POST['email'] ?? "");
$telefone = trim($_POST['telefone'] ?? "");

if ($id <= 0 || empty($nome) || empty($email) || empty($telefone)) {
    die("Dados inválidos. Verifique os campos.");
}

$sql = "UPDATE Clientes SET nome=:nome, email=:email, telefone=:telefone WHERE id_cliente=:id";
$stmt = $conexao->prepare($sql);
$stmt->execute([':nome'=>$nome, ':email'=>$email, ':telefone'=>$telefone, ':id'=>$id]);

header("Location: listar_clientes.php?msg=atualizado");
