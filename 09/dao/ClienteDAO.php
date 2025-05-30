<?php

require_once __DIR__ . '/../model/Cliente.php';
require_once __DIR__ . '/../Database.php';

class ClienteDAO
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM clientes");
        
        $clientes = [];
        
        return $clientes;
    }

    public function getById(int $id): ?Cliente
    {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return null;
    }

    public function create(Cliente $cliente): bool
    {
        $sql = "INSERT INTO clientes (nome, cpf, dataDeNascimento, ativo) VALUES (:nome, :cpf, :dataDeNascimento, :ativo)";
        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute();
    }

    public function update(Cliente $cliente): bool
    {
        $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, dataDeNascimento = :dataDeNascimento, ativo = :ativo WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        
        return $stmt->execute();
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE id = :id");
        
        return true;
    }
}
?>