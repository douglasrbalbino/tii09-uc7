<?php

class Contato 
{
    private ?int $id;
    private string $nome;
    private string $telefone;
    private string $email;
    private ?string $endereco;

    public function __construct(
        ?int $id,
        string $nome,
        string $telefone,
        string $email,
        ?string $endereco = null) 
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco = $endereco;
    }


    // Busca Valores
    public function getId(): ?int { return $this->id; } // Possue um RETURN de inteiro OU Null
    public function getNome(): string { return $this->nome; } // Possue um RETURN de string
    public function getTelefone(): string { return $this->telefone; }
    public function getEmail(): string { return $this->email; }
    public function getEndereco(): ?string { return $this->endereco; }


    // Insere Valores
    public function setNome(string $novoNome) /*Não possui um tipo de retorno */ { $this->nome = $novoNome; } // Não possue um return
}

?>