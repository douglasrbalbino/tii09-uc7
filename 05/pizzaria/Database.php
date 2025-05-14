<?php

require 'Pizza.php';

class Database {
    private string $host = 'localhost';
    private string $dbname = 'pizzaria_senac';
    private string $user = 'root';
    private string $pass = ''; 

    public function getAll() 
    {
        // $resultado = $db->query("SELECT * FROM produtos");  --- usado em 'conexão' da aula 04
        // $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        
        $db = new PDO("mysql:host=localhost;dbname=pizzaria_senac", 'root', ''); // Não precisa indicar o tipo primitivo
        $stmt = $db->query("SELECT * FROM pizza");

        $pizzas = [];

        while($row = $stmt->fetch((PDO::FETCH_ASSOC))) {
            $pizzas = new Pizza($row['id'], 
                                $row['sabor'], 
                                $row['tamanho'], 
                                $row['preco']);
        }
        return $pizzas;
    }
}