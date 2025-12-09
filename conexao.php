<?php

function connect_bd(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webti";
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}

function cadastrarProduto($nome, $valor){
    $con = connect_bd();
    $stmt = $con->prepare("INSERT INTO produtos (nome, valor) VALUES (:nome, :valor)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":valor", $valor);
    return $stmt->execute();
}

function deletarProduto($id){
    $con = connect_bd();
    $stmt = $con->prepare("DELETE FROM produtos WHERE id = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
}

function updateProduto($id, $nome, $valor){
    $con = connect_bd();
    $stmt = $con->prepare("UPDATE produtos SET nome = :nome, valor = :valor WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":valor", $valor);
    return $stmt->execute();
}

function getProduto($id){
    $con = connect_bd();
    $stmt = $con->prepare("SELECT * FROM produtos WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getProdutos(){
    $con = connect_bd();
    $stmt = $con->prepare("SELECT * FROM produtos ORDER BY id DESC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function pesquisarProdutos($pesquisa){
    $con = connect_bd();
    $stmt = $con->prepare("SELECT * FROM produtos WHERE nome = :pesquisa ORDER BY id DESC");
    $stmt->bindParam(":pesquisa", $pesquisa);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>