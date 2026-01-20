<?php

class Funcionario {
    private NomeFuncionario $nome;
    private Salario $salario;
    private DataNascFuncionario $date;
    private Email $email;
    private Cargo $cargo;

    public function __construct(string $nome, float $salario, string $date, string $email, string $cargo)
    {
        $this->nome = new NomeFuncionario($nome);
        $this->salario = new Salario($salario);
        $this->date = new DataNascFuncionario($date);
        $this->email = new Email($email);
        $this->cargo = new Cargo($cargo);
    }

    
    public function getSalario(): float
    {
        return $this->salario->getSalario();
    }

    public function getEmail(): string
    {
        return $this->email->getEmail();
    }

    public function getDataNasc(): string
    {
        return $this->date->getDate();
    }
    
    public function getNome(): string
    {
        return $this->nome->getNomeFuncionario();
    }

    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    public function __toString()
    {
         return $this->getNome() . " - " . $this->getSalario() . " - " . $this->getDataNasc() . " - " . $this->cargo->getNomeCargo() . " - " . $this->cargo->getResponsabilidade();
    }
}