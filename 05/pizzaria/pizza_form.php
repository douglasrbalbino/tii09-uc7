<?php

require_once 'PizzaDAO.php';
require_once 'Pizza.php';

$dao = new PizzaDAO();
$pizza = null;

if(isset($_GET['id'])) {
    $pizza = $dao->getById($_GET['id']);
}

if // Fazer o Update

if(isset($_POST['sabor']) && isset($_POST['tamanho']) && isset($_POST['preco'])) {
    $sabor = $_POST['sabor'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    $pizza = new Pizza($_POST['id'], $_POST['sabor'], $_POST['tamanho'], $_POST['preco']);
    $dao->create($pizza);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pizza</title>
</head>
<body>
    <h2>Cadastrar Nova Pizza</h2>

    <form action="pizza_form.php" method="post">
        <label>Sabor</label>
        <input type="text" name="sabor" required>

        <label>Tamanho</label>
        <input type="text" name="tamanho" required>

        <label>Preco</label>
        <input type="number" name="preco" required>

        <button type="submit">Salvar</button>
    </form>
    <br>
    <a href="index.php">Cancelar</a>
</body>
</html>