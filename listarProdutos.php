<?php
require_once "conexao.php";
$textoPesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';

if (!empty($textoPesquisa)) {
    $produtos = pesquisarProdutos($textoPesquisa);
} else {
    $produtos = getProdutos();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de Produtos</title>
    <link rel="stylesheet" href="listarStyle.css">
</head>
<body>

<button onclick="window.location.href='login.php'" class = "btn btnSair">sair</button>

<div id="geral">
    <div class="container">
        <h1>Lista de produtos</h1>
          
    <form method="GET" action="listarProdutos.php" id="formPesquisa">
        <div id="containerPesquisa">
            <input type = "text" name = "pesquisa" id = "inputPesquisa" placeholder = "pesquisar produto" value = "<?php echo htmlspecialchars($textoPesquisa); ?>">

            <button type="submit" id="btnPesquisar" class="btn">pesquisar</button>

            <?php if (!empty($textoPesquisa)): ?>
            <a href="listarProdutos.php" id="btnLimpar" class="btn">limpar</a>
            <?php endif; ?>
        </div>
    </form>

        <a href="cadastro.php" id="btnNovoProduto" class = "btn">novo Produto</a>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo htmlspecialchars($produto["id"]); ?></td>
                <td><?php echo htmlspecialchars($produto["nome"]); ?></td>
                <td>R$ <?php echo number_format($produto["valor"], 2, ','); ?></td>
            <td>
                        <a href="editarProduto.php?id=<?php echo urlencode($produto["id"]); ?>" class = "btn">editar</a>
                    </td>
            </tr>
        <?php endforeach; ?>
        </table>
   
    </div>
</div>
</body>
</html>