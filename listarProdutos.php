
<?php

require_once "conexao.php";
$produtos = getProdutos();
?>
<link rel="stylesheet" href="listarStyle.css">

<button>Sair</button>

<div id = "geral">
    <div class = "container">
        <h1>Lista de produtos</h1>
        <table border = "1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Editar</th>
            </tr>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo htmlspecialchars($produto["id"]);?></td>
                <td><?php echo htmlspecialchars($produto["nome"]);?></td>
                <td><?php echo htmlspecialchars($produto["valor"]);?></td>
                <td><a href="editarUsuario.php?id=<?php echo urlencode($produto["id"]);?>">Editar</a></td>
            </tr>
            <?php?> 

        <?php endforeach; ?>

        </table>

</div>
</div>