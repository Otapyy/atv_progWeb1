<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuario</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>

<div id="container">
    <h1>Login de usuario</h1>
    <form action="processaCadastro.php" method="POST">
        <div id="containerInterno">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>

            <input type="submit" id="btnLogin" value="Cadastrar">
        </div>
    </form>
</div>

</body>
</html>