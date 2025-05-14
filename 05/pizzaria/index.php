<?php

require 'Database.php';

$meuBancoDeDados = new Database();

echo "<pre>";
print_r($meuBancoDeDados->getAll());
echo "</pre>";