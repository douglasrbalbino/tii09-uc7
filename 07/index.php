<?php

require_once './backend/ProdutoDAO.php';

$dao = new ProdutoDAO();
$produtos = $dao->getAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h2>Lista de Produtos</h2>    

    <a href="./frontend/produto_form.php">Cadastrar Novo Produto</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>


        <?php foreach($produtos as $prd): ?> <!-- Faço um foreach para os dados que irei repetir conforme o banco de dados -->
        <tr>
            <td><?= $prd->getNome() ?></td>
            <td><?= $prd->getPreco() ?></td>
            <td>
                <a href="./frontend/produto_details.php?id=<?=$prd->getId() ?>">Detalhes</a>
                <a href="./frontend/produto_form.php?id=<?=$prd->getId() ?>">Editar</a>
                <a href="./frontend/produto_delete.php?id=<?=$prd->getId() ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>