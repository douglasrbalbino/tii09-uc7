<?php

    // SINGLETON -- https://refactoring.guru/design-patterns/singleton
    class Conexao {
        private static $bd = null;

        public static function getBd() {

            // return new PDO("mysql:host=localhost;dbname=pizzaria_senac", 'root', ''); -- Essa unica linha sem usar o singleton

            if (self::$bd === null) {

            self::$bd = new PDO("mysql:host=localhost;dbname=pizzaria_senac", 'root', ''); // Não precisa indicar o tipo primitivo

            }

            return self::$bd;
        }
    }

?>