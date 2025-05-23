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
        $sql = "SELECT * FROM produtos";
        $resultadoDoBanco =  $this->db->query($sql);
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

    public function getById(int $id): ?Produto // Pode retornar um Produto ou um NULL
    {
        $sql = "SELECT * FROM  produtos WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        // $stmt->bindParam(':id', $id);
        $stmt->execute([':id' => $id]); // O bindParam está acontecendo diretamente no execute em forma de array

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row? new Produto( // A $row existe? Se sim, execute isso
            $row['id'],
            $row['nome'],
            $row['preco'], // Esses valores como 'preco' tem de ser igual estão no banco de dados
            $row['ativo'],
            $row['dataDeCadastro'],
            $row['dataDeValidade']
        ) : null; // Se a $row não existe, me retorne NULL
    }

    public function create(Produto $produto): void 
    {
        $sql = "INSERT INTO produtos (nome, preco, ativo, dataDeCadastro, dataDeValidade) VALUES
                (:nome, :preco, :ativo, :cadastro, :validade)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':nome' => $produto->getNome(),            
            ':preco' => $produto->getPreco(),            
            ':ativo' => $produto->getAtivo(),            
            ':cadastro' => $produto->getDataDeCadastro(),            
            ':validade' => $produto->getDataDeValidade()           
        ]);
    }


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

    public function update(Produto $produto): void 
    {
        $sql = "UPDATE produtos SET nome = :nome, 
                                    preco = :preco, 
                                    ativo = :ativo, 
                                    dataDeCadastro = :dataDeCadastro, 
                                    dataDeValidade = :dataDeValidade 
                                    WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $produto->getId(), // O update precisa ter um id, pois estou alterando os dados de algo que já existe
            ':nome' => $produto->getNome(), 
            ':preco' => $produto->getPreco(), 
            ':ativo' => $produto->getPreco(), 
            ':dataDeCadastro' => $produto->getDataDeCadastro(),
            ':dataDeValidade' => $produto->getDataDeValidade()
        ]);
    }

    public function delete(int $id): void {}
}

$dao = new ProdutoDAO();
$produto = $dao->getById(6);

// $produto = new Produto(5, 'Banana', 3, 0,'2024-10-10', '2024-10-10'); // 
// ($dao->update($produto));

/*
// SQL INJECTION:
$dao = new ProdutoDAO();
$produto = new Produto(null, "'Teste2', 0, 0, '2025-10-10', '2025-12-12'); DROP TABLE produtos --", 9.99, 1, '2025-01-01', '2025-12-12');

$dao->createInseguro($produto);
*/

