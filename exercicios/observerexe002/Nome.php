<?php


class Nome {
    private string $nome;
    public function __construct(string $nome)
    {
        $this->validate($nome);
        $this->nome = $nome;
    }
    public function validate(string $nome): void
    {
        if (empty($nome) || strlen($nome) > 100 || is_numeric($nome)) {
            throw new \Exception("Passe um nome válido");
        }
    }
    public function getNome(): string
    {
        return $this->nome;
    }
}