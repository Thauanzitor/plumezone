<?php
require_once "conexao.php";

$nome = trim($_POST["nome"] ?? "");
$email = trim($_POST["email"] ?? "");
$telefone = trim($_POST["telefone"] ?? "");

if (empty($nome) || empty($email) || empty($telefone)) {
    header("Location: index_clientes.php?erro=Campos obrigatórios"); exit;
}

$sql = "INSERT INTO Clientes (nome, email, telefone) VALUES (:nome, :email, :telefone)";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":telefone", $telefone);

try {
    $stmt->execute();
    header("Location: listar_clientes.php?msg=sucesso"); exit;
} catch (PDOException $erro) {
    die("Erro ao cadastrar: " . $erro->getMessage());
}
