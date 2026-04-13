<?php
declare(strict_types=1);
final class Cliente {
    private string $nome;
    private string $email;

    public function __construct(string $nome, string $email) {
        $this->nome = $nome;
        $this->email = $email;
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}


