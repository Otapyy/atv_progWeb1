<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuario</title>
    <link rel="stylesheet" href="cadastroStyle.css">
</head>
<body>

<div id = "container">
    <h1>Cadastro usuario</h1>
    <form action="processaCadastro.php" method = "POST">
        <div id = "containerInterno">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" require>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" require>
        <label for="login">Login:</label>
        <input type="text" id="login" require>
        <input type="submit" id = "btnCadastro" value = "cadastrar">
        </div>

    </form>
</div>

</body>
</html>