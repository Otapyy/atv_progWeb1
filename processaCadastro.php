<?php

if(!isset($_POST["nome"]) || !isset($_POST["login"]) || !isset($_POST["senha"])){
    header("Location: cadastro.php?error=faltandoDados");
    exit();
}

require_once "conexao.php";

cadastrarUsuario($_POST["nome"], $_POST["login"], $_POST["senha"]);

?>