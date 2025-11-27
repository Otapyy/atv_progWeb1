<?php

if(empty($_POST["nome"]) || empty($_POST["valor"]) ){
    header("Location: cadastro.php?error=faltandoDados");
    exit();
}

require_once "conexao.php";

if(cadastrarProduto($_POST["nome"], $_POST["valor"])){
    header("Location: listarProdutos.php?sucesso=1");
    exit();
} else {
    header("Location: cadastro.php?error=banco");
    exit();
}