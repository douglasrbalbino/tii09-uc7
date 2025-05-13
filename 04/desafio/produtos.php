<!--
PHP + HTML

Crie um formulário que permita cadastrar produtos (nome e preço)
Use funções para:
- Inserir os produtos no array
-->

<?php 
$produto['nome'] = $_GET['produto'];
        $produto['preco'] = $_GET['preco'];

$produtos = [
    ["nome" => "", "preco" => ""]
];

function inserirProduto($produtos) {
    foreach($produtos as $produto) {
        $produto['nome'] = $_GET['produto'];
        $produto['preco'] = $_GET['preco'];
        echo "<li> {$produto['nome']} {$produto['preco']} </li>";
    }
}

echo  "<ul>";

echo inserirProduto($produtos);

echo  "</ul>";