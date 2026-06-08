<?php
require_once "conexao.php";
$id = (int)($_POST["id"] ?? 0);
$nome = trim($_POST["nome"] ?? "");
$preco = trim($_POST["preco"] ?? "");
$estoque = trim($_POST["estoque"] ?? "");

if ($id <= 0)  empty($nome)  empty($preco)