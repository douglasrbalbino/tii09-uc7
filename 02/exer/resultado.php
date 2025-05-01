<?php
/*
1 - Crie um formulário que receba 4 notas
2 - Receba os valores da requisição no PHP
3 - Converta os valores recebidos para float
4 - Some os 4 valores e retorne a média
5 - Escreva "Aprovado" (>=7), "Recuperação (>=5), "Reprovado
*/

$nota1 = (float) $_GET['n1'];
$nota2 = (float) $_GET['n2'];
$nota3 = (float) $_GET['n3'];
$nota4 = (float) $_GET['n4'];

$media = (int) (($nota1 + $nota2 + $nota3 + $nota4) / 4) ; // Para transformar o resultado em INT

if ($media >= 7) {
    echo "Média $media : Aprovado.";
} else if ($media >= 5 ) {
    echo "Média $media : Recuperação.";
} else {
    echo "Média $media : Reprovado.";
}

// function mediaNotasfloatt ($nota1, $nota2, $nota3, $nota4) : float {
//     ($nota1 + $nota2 + $nota3 + $nota4) / 4;
// }
