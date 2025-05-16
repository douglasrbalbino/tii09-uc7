<?php

class Contato 
{
    private ?int $id;
    private string $nome;

    public function __construct(?int $id, string $nome) 
    {
        $this->id = $id;
        $this->nome = $nome;
    }


    // Busca Valores
    public function getId(): ?int { return $this->id; } // Possue um RETURN de inteiro OU Null
    public function getNome(): string { return $this->nome; } // Possue um RETURN de string


    // Insere Valores
    public function setNome(string $novoNome) /*Não possui um tipo de retorno */ { $this->nome = $novoNome; } // Não possue um return
}


$cont1 = new Contato(null, "fulano da massa");

?>