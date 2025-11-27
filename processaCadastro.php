<?php

if(empty($_POST["nome"]) || empty($_POST["login"]) || empty($_POST["senha"])){
    header("Location: cadastro.php?error=faltandoDados");
    exit();
}

require_once "conexao.php";

if(cadastrarUsuario($_POST["nome"], $_POST["login"], $_POST["senha"])){
    header("Location: listarUsuarios.php?sucesso=1");
    exit();
} else {
    header("Location: cadastro.php?error=banco");
    exit();
}