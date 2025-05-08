<?php

function saudacao(): void { // VOID é usado para identificar uma função que não tem RETURN
    echo "Bem vindo ao sistema! </br>";
}

saudacao();

function somar($a, $b) {
    return $a + $b;
}

echo "Retorno da soma: " . somar(2, 3) . "</br>";

function subtrair(int $a, int $b) {
    return $a - $b;
}

echo "Retorno da subtração: " . subtrair(10, 8) . "</br>";

function multiplicar(int $a, int $b): int { // Transforma o resutado em INT(precisa conter um RETURN);
    return $a * $b;
}

echo "Retorno da multiplicação: " . multiplicar(10, 8) . "</br>";

function dividir(int $a, int $b): float |string { // Transforma o resutado em FLOAT ou STRING(precisa conter um RETURN);
    if ($b == 0) {
        return "Impossível dividir por 0.";
    } else {
        return $a / $b;
    }
}

echo "Retorno da divisão: " . dividir(10, 8) . "</br>";

function listarNomes(array $nomes): void {
    foreach($nomes as $n) {
        echo "<li> $n </li>";
    }
}

$professores = ["Celso", "Luana", "Arlindo"];
echo "<ul>";

listarNomes($professores);

echo "</ul>";