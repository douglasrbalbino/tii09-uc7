<?php

/*
Propriedades: nome, veiculo, telefone (todos private string)
Construtor que recebe todas as propriedades
Sobrescreva __tooString() para vizualizarmos os dados
Crie um get para o "nome" e um set para o telefone
*/

class Cliente {
    private string $nome;
    private string $veiculo;
    private string $telefone;

    public function __construct(string $nome, string $veiculo, string $telefone) {
        $this->nome = $nome;
        $this->veiculo = $veiculo;
        $this->telefone = $telefone;
    }

    public function __toString()
    {
        return "Nome: $this->nome, Veículo: $this->veiculo, Telefone: $this->telefone </br>";
    }

    public function getNome() {
        return $this->nome;
    }

    public function getVeiculo() {
        return $this->veiculo;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone(string $novoTelefone) {
        if (strlen($novoTelefone) == 11) {
            $this->telefone = $novoTelefone;
        } else {
            throw(new error("Phone number invalid!")); // Exibe a mensagem de erro se a condição não for atendida
        }
    }
}

$c1 = new Cliente("Ronaldo", "Fuscão", "11912345678");

echo ($c1);
echo "</br>";
echo ($c1->getNome());
echo "</br>";
echo ($c1->getVeiculo());
echo "</br>";
echo ($c1->getTelefone());
echo "</br>";
echo ($c1->setTelefone("11952523434")); // Alterei o valor string do $telefone na classe
echo "</br>";
echo ($c1);