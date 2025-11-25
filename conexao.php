<?php

function connect_bd(){
    $servername = "localhost";
    $username = "root";
    $password = "aluno";
    $dbname = "webti";
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}

function cadastrarUsuario($nome, $login, $senha){
    $con = connect_bd();
    $stmt = $con->prepare("INSERT INTO usuarios (nome, login, senha) VALUES (:nome, :login, :senha)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);
    return $stmt->execute();
}

function deletarUsuario($id){
    $con = connect_bd();
    $stmt = $con->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(":id", $id);
    return $stmt->execute();
}

function updateUsuario($id, $nome, $login, $senha){
    $con = connect_bd();
    $stmt =  $con->prepare("UPDATE usuarios SET nome = :nome, login = :login, senha = :senha WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);

    return $stmt->execute();

}

function getUsuario($id){
    $con = connect_bd();
    $stmt =  $con->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);

}

//echo var_dump(getUsuario(2))

function getUsuarios(){
    $con = connect_bd();
    $stmt = $con->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

//echo"<pre>";
//print_r(var_dump(getUsuarios()));
//echo"</pre>";

?>
