<?php
require 'Pizza.php';
require 'Conexao.php';

class PizzaDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Conexao::getBd();
    }

    public function getAll()
    {        
        $stmt = $this->db->query("SELECT * FROM pizza");
        $pizzas = [];

        while ($row = $stmt->fetch((PDO::FETCH_ASSOC))) {
            $pizzas[] = new Pizza(
                $row['id'],
                $row['sabor'],
                $row['tamanho'],
                $row['preco']
            );
        }
        return $pizzas;
    }

    public function getById(int $id): ?Pizza 
    {
        $sql = "SELECT * FROM pizzaria_senac.pizza WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC); // Puxa a linha do banco de dados através do ID, informado anteriormente

        return $row? new Pizza( // Se a Row existe então associe cada propriedade conforme abaixo
            $row['id'],
            $row['sabor'],
            $row['tamanho'],
            $row['preco'])
            : null; // Se a Row não existe então recebe NULL
    }

    public function create(Pizza $pizza) 
    {
        $stmt = $this->db->prepare("INSERT INTO pizza (sabor, tamanho, preco)
            VALUES (:sabor, :tamanho, :preco)");
        $sabor = $pizza->getSabor();
        $tamanho = $pizza->getTamanho();
        $preco = $pizza->getPreco();

        $stmt->bindParam(':sabor', $sabor);
        $stmt->bindParam(':tamanho', $tamanho );
        $stmt->bindParam(':preco', $preco);
        $stmt->execute();
    }


    public function update(Pizza $pizza) 
    {
        $sql = "UPDATE pizzaria_senac.pizza SET 
                    sabor = :sabor, 
                    tamanho = :tamanho, 
                    preco = :preco, 
                    WHERE id = :id";

    
        $id = $pizza->getId();
        $sabor = $pizza->getSabor();
        $tamanho = $pizza->getTamanho();
        $preco = $pizza->getPreco();
    
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':sabor', $sabor);
        $stmt->bindParam(':tamanho', $tamanho );
        $stmt->bindParam(':preco', $preco);
        $stmt->execute();
    }

    public function delete(int $id): void
    {
        $sql = "DELETE FROM pizza WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

?>