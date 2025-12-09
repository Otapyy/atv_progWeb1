<?php
if (empty($_POST["id"])) {
    header("Location: listarProdutos.php?error=id_invalido");
    exit();
}
require_once "conexao.php";

$id = $_POST["id"];

if (deletarProduto($id)) {
    header("Location: listarProdutos.php?sucesso=produto_deletado");
    exit();
} else {
    header("Location: listarProdutos.php?error=erro_ao_deletar");
     exit();
}
