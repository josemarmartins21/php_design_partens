<?php

class NomeFuncionario {
    private string $nome;

    public function __construct(string $nome)
    {
        try {
            $this->validate($nome);
            $this->nome = $nome;
        } catch (\Exception $e) {
            print $e->getMessage();
        }
    }

    public function validate(string $nome): void
    {
        if (empty($nome) || !is_string($nome)) {
            throw new Exception("Nome inválido");   
        }
    }

    public function getNomeFuncionario(): string
    {
        return $this->nome;
    }
}