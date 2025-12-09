<?php
require_once "conexao.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: listarProdutos.php?error=id_invalido");
     exit();
}

$id = $_GET['id'];
 $produto = getProduto($id);

if (!$produto) {
   header("Location: listarProdutos.php?error=produto_nao_encontrado");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Editar Produto</title>
    <link rel="stylesheet" href="editarStyle.css">
</head>
<body>

<div id="containerTabela">
    <h1>Editar Produto</h1>
    
    <form action="processaEdicao.php" method="POST">
    <div id="containerInterno">
            <input type = "hidden" name = "id" value = "<?php echo htmlspecialchars($produto['id']); ?>">

            <label for="nome">Nome:</label>
           <input type = "text" id = "nome" name = "nome" value = "<?php echo htmlspecialchars($produto['nome']); ?>" required>
            <label for="valor">Valor:</label>
            <input type = "text" id = "valor" name = "valor" value = "<?php echo htmlspecialchars($produto['valor']); ?>" required>

            <div id="containerBotoes">
                 <button type = "submit" id = "btnSalvar" value = "Salvar Alterações" class = "btn">salvar</button>
                <button onclick="window.location.href ='listarProdutos.php'" class = "btn btnVoltar">voltar</button>
           </div>
            
        </div>
     </form>

    <form action = "processaDeletar.php" method = "POST" id = "formDeletar">
        <input type = "hidden" name = "id" value = "<?php echo htmlspecialchars($produto['id']); ?>">
     <button type = "submit" id = "btnDeletar" class = "btn">deletar</button>
    </form>

</div>

</body>
</html>