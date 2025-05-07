<table border="1">
    <tr>
        <th>Cliente</th>
        <th>CPF</th>
        <th>Cidade</th>
    </tr>

    <?php
/*
Crie um array multidimensional com 2 clientes, cada um contendo:
- nome
- cpf
- cidade
*/
    
    $clientes = [
        ["nome" => "Ronaldo", "cpf" => "111.111.111-1", "cidade" => "São Paulo"],
        ["nome" => "Shrek", "cpf" => "222.222.222-2", "cidade" => "Pantano"]
    ];

    foreach ($clientes as $cliente) {
        echo "
            <tr>
                <td> {$cliente['nome']} </td>
                <td> {$cliente['cpf']} </td>
                <td> {$cliente['cidade']} </td>
            </tr>
        ";
    }

    ?>
    
</table>