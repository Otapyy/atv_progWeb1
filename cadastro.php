<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuario</title>
    <link rel="stylesheet" href="cadastroStyle.css">
</head>
<body>

<div id="containerTabela">
     <h1>Cadastro de produto</h1>
    <form action="processaCadastro.php" method="POST">
        <div id="containerInterno">

            <label for="nome">Nome:</label>
           <input type="text" id="nome" name="nome" required>

            <label for="valor">Valor:</label>
             <input type="text" id="valor" name="valor" required>

            <input type="submit" id="btnCadastro" value="Cadastrar">
        </div>
     </form>
 </div>

</body>
</html>