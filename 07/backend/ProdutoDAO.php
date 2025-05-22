<?php

require_once 'Produto.php';
require_once 'Database.php';

class ProdutoDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAll(): array
    {
        $resultadoDoBanco = $this->db->query("SELECT * FROM produtos");
        $produtos = [];        

        while($row = $resultadoDoBanco->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] =  new Produto(
                $row['id'],
                $row['nome'], 
                $row['preco'], 
                $row['ativo'],
                $row['dataDeCadastro'],
                $row['dataDeValidade']
            );
        }

        return $produtos;
    }

    public function getById(int $id): ?Produto
    {
        return null;
    }

    public function create(Produto $produto): void {}

    public function createInseguro(Produto $produto): void
    {
        $sql = "INSERT INTO produtos (nome, preco, ativo, dataDeCadastro, dataDeValidade) VALUES
            ({$produto->getNome()}, 
            {$produto->getPreco()}, 
            {$produto->getAtivo()},
            '{$produto->getDataDeCadastro()}', 
            '{$produto->getDataDeValidade()}')";

        $this->db->query($sql);
    }

    public function update(Produto $produto): void {}

    public function delete(int $id): void {}
}

$dao = new ProdutoDAO();
echo "<pre>";
print_r($dao->getAll());
/*
// SQL INJECTION:
$dao = new ProdutoDAO();
$produto = new Produto(null, "'Teste2', 0, 0, '2025-10-10', '2025-12-12'); DROP TABLE produtos --", 9.99, 1, '2025-01-01', '2025-12-12');

$dao->createInseguro($produto);
*/

