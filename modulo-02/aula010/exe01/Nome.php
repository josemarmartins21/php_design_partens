<?php

class Nome {
    private string $nome;

    public function __construct(string $nome)
    {

        try {
            $this->validar($nome);
            $this->nome = $nome;
        } catch (\Exception $th) {
            die($th->getMessage());
        }

    }

    public function validar(string $nome): void
    {
        if (is_numeric($nome) === true) {
            throw new \Exception("O nome tem que conter letras");
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}