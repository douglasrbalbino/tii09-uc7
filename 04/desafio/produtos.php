<!--
PHP + HTML

Crie um formulário que permita cadastrar produtos (nome e preço)
Use funções para:
- Inserir os produtos no array
-->

<?php 
$nome = $_GET['produto'];
$preco = $_GET['preco'];

$produtos = [];

$produtos = [$nome,$preco];

echo  "<ul>";
 foreach($produtos as $p) {
    echo "<li> {$p} </li>";
 }

echo  "</ul>";