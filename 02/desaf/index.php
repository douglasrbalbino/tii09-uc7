<?php

$salario = (float) $_GET['salario'];

$desconto = $salario * 0.11;
$salarioLiquido = $salario - $desconto;

echo "Salario: $salario, Desconto: $desconto, Salario Líquido: $salarioLiquido";

// $salario = (float) $_GET['salario'];

// // echo "Salário Original: R$ $salario. </br>";
// // echo "Desconto de 11%: R$ $desconto. </br>";
// // echo "Salário Final: R$ $salarioFinal. </br>";

// if ($salario <= 1518) {
//     $quota = (int) 0.075;
//     $desconto = $salario * $quota;
//     $salarioFinal = (float) $salario - $desconto;
//     echo "Salário Original: R$ $salario. </br>";
//     echo "Desconto de 7,5%: R$ $desconto. </br>";
//     echo "Salário Final: R$ $salarioFinal. </br>";
// } else if ($salario <= 2793.88) {
//     $quota = (int) 0.09;
//     $desconto = (float) ($salario * $quota);
//     $salarioFinal = (float) $salario - $desconto;
//     echo "Salário Original: R$ $salario. </br>";
//     echo "Desconto de 9%: R$ $desconto. </br>";
//     echo "Salário Final: R$ $salarioFinal. </br>";
// } else if ($salario <= 4190.83) {
//     $quota = (int) 0.12;
//     $desconto = (float) ($salario * $quota);
//     $salarioFinal = (float) $salario - $desconto;
//     echo "Salário Original: R$ $salario. </br>";
//     echo "Desconto de 12%: R$ $desconto. </br>";
//     echo "Salário Final: R$ $salarioFinal. </br>";
// } else if ($salario <= 8157.41) {
//     $quota = (int) 0.14;
//     $desconto = (float) ($salario * $quota);
//     $salarioFinal = (float) $salario - $desconto;
//     echo "Salário Original: R$ $salario. </br>";
//     echo "Desconto de 14%: R$ $desconto. </br>";
//     echo "Salário Final: R$ $salarioFinal. </br>";
// }