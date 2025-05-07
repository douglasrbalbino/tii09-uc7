<ul>

    <?php
    /*
    Crie um array com 4 nomes de alunos e exiba-os em uma lista <ul>
    no navegador
    */
    
    $alunos = [ "Ronaldo", "Shrek", "Pelanza", "Thomas"];

    foreach ($alunos as $aluno) {
        echo "<li> $aluno </li>";
    }

    ?>

</ul>