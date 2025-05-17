<?php
    require 'Database.php';
    require 'Contato.php';

    class ContatoDAO 
    {
        private $db; // Usado em todas as funções

        public function __construct() {

            $this->db = Database::getInstance(); // $db agora puxa a getInstance da classe Database(que conecta o bando de dados)
                           // o :: serve para usar funções estáticas

        }

        public function getAll() {
            $stmt = $this->db->query("SELECT * FROM contatos");
            $contatos = []; // Inicializa um array vazio

            while ($row  = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $contatos[] = new Contato($row['id'], $row['nome'], $row['telefone'], $row['email'], $row['endereco']);
            }

            return $contatos;
        }

        public function getById(int $id): ?Contato { // Verificar aqui se o ID que for passado existe ou não (null)
            $stmt = $this->db->prepare("SELECT * FROM agenda.contatos WHERE id= :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC); // Verifica no banco a linha associativa pelo id (linha de informações pelo id)

            return $row? new Contato(
                $row['id'],
                $row['nome'],
                $row['telefone'],
                $row['email'],
                $row['endereco'])
                : null;
        }
    
        public function create(Contato $contato) {
            $sql = "INSERT INTO contatos (nome, telefone, email, endereco) VALUES
	            (:nome, :telefone, :email, :endereco)";
            $stmt = $this->db->prepare($sql);

            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();
            $endereco = $contato->getEndereco();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->execute();
        }

        public function delete(int $id): void
        {
            $stmt = $this->db->prepare("DELETE FROM contatos WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
    }
    

?>