<?php
if (empty($_POST["id"]) || empty($_POST["nome"]) || empty($_POST["valor"])) {
    header("Location: listarProdutos.php?error=dados_incompletos");
    exit();
}
require_once  "conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$valor = $_POST["valor"];

if (updateProduto($id, $nome, $valor)) {
   header("Location: listarProdutos.php?sucesso=produto_atualizado");
    exit();
} else {
     header("Location: editarProduto.php?id=" . urlencode($id) . "&error=erro_ao_atualizar");
    exit();
}
