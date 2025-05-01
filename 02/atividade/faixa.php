<?php

/*
Crie um formulário que recebe uma idade (inteiro)
Veriquei se idade:
- Menor que 12: Criança
- Menor que 18: Adolescente
- Menor que 60: Adulto
- Qualquer outra idade: Idoso
*/

$idade = (int) $_GET['idade'];

if ($idade < 12) {
    echo "Idade: $idade - Criança.";
} else if ($idade < 18) {
    echo "Idade: $idade - Adolescente.";
} else if ($idade < 60) {
    echo "Idade: $idade - Adulto.";
} else {
    echo "Idade: $idade - Idoso.";
}