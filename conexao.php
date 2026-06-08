<?php
$servidor = "localhost";
$banco = "loja_roupas";
$usuario = "root";
$senha = "cowboylikeme321@";

try {
$conexao = new PDO(
"mysql:host=$servidor;dbname=$banco;charset=utf8mb4",
$usuario, $senha
);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $erro) {
die("Erro ao conectar: " . $erro->getMessage());
}
?>






