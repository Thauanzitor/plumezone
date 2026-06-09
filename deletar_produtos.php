<?php
require_once "conexao.php";
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
header('Location: listar_produtos.php'); exit;
}
$id = (int) $_GET['id'];
// == 2. VERIFICACAO PREVIA — CONFIRMA QUE O ALUNO EXISTE
$check = $conexao->prepare(
"SELECT id FROM alunos WHERE id = :id LIMIT 1");
$check->bindParam(':id', $id, PDO::PARAM_INT);
$check->execute();
if (!$check->fetch()) {
header('Location: listar_produtos.php'); exit;
}
// == 3. DELETE — REMOVE O REGISTRO DO BANCO ===========
$sql = "DELETE FROM alunos WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
try {
$stmt->execute();
header("Location: listar_produtos.php?msg=deletado"); exit;
} catch (PDOException $erro) {
die("Erro ao deletar: " . $erro->getMessage());
}
?>