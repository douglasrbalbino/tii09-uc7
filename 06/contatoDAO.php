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
                $contatos[] = new Contato($row['id'], $row['nome']);
            }

            return $contatos;
        }
    
        public function create(Contato $contato) {
            $stmt = $this->db->prepare("INSERT INTO contatos (nome) VALUES (:nome)");

            $nome = $contato->getNome();

            $stmt->bindParam(':nome', $nome);
            $stmt->execute();
        }
    }

?>