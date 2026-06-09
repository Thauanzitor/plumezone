<?php
require_once "conexao.php";

$nome = trim($_POST["nome"] ?? "");
$preco = trim($_POST["preco"] ?? "");
$estoque = trim($_POST["estoque"] ?? "");

if (empty($nome) || empty($preco) || empty($estoque)) {
    header("Location: salvar_produtos.php?erro=Campos obrigatórios"); exit;
}

$sql = "INSERT INTO Produtos (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":preco", $preco);
$stmt->bindParam(":estoque", $estoque);

try {
    $stmt->execute();
    header("Location: listar_produtos.php?msg=sucesso"); exit;
} catch (PDOException $erro) {
    die("Erro ao cadastrar: " . $erro->getMessage());
}
?>
