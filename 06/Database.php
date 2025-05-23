<?php 

    class Database 
    {
        public static function getInstance() // Entra no banco de dados já criado
        {
            return new PDO("mysql:host=localhost;dbname=agenda",'root', '');
        }

    }

?>