<?php

$a = 10;
$b = 5;

echo "Soma: " . $a . $b . "</br>";
echo "$a Maior que $b:" . ($a > $b ? " Sim" : " Não") . "</br>";

$idade = 80;

if ($idade >= 18) {
    echo "Maior de idade, $idade anos. </br>";
} else {
    echo "Menor de idade, $idade anos. </br>";
}

// SWITCH CASE
$dia = "ronaldo";

switch($dia) {
    case "segunda":
        echo "Inicio da semana. </br>";
        break;

    case "sexta":
        echo "Último dia útil. </br>";
        break;

    default:
    echo "Dia comum. </br>";
}