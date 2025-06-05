<?php

require_once 'Database.php';
require_once 'Usuario.php';

class UsuarioDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}