<!-- Array Simples -->
<ul>

    <?php
    
    $frutas = ["Goiaba", "Uva", "Laranja"]; //trouxe do banco de dados
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    
    ?>

</ul>

<!-- Array Associativo -->
 <table border="1">

<?php
    $cliente = [
    "nome" => "Carlos",
    "idade" => 33,
    "email" => "carlos@email.com"
];

foreach ($cliente as $chave => $valor) { // Para passar pela chave ("nome"), e associar o valor ("carlos")
    echo "<tr> <td> $chave </td> <td> $valor </td> </tr>";
}
?>

 </table>

 <!-- Array Multidimensional (matriz)-->
<table border="1">
    <tr>
        <th>Produto</th>
        <th>Preço</th>
    </tr>
    <?php
    $produtos = [
        ["nome" => "Pao", "preco" => 1.50],
        ["nome" => "Café", "preco" => 3.00],
        ["nome" => "Leite", "preco" => 4.80]
    ];

    foreach($produtos as $produto) {
        echo "
            <tr>
                <td>{$produto['nome']}</td> " .
                "<td>R$ " . number_format($produto['preco'], 2, ',','.') . "</td>
            </tr>
        ";
    }

    ?>

</table>