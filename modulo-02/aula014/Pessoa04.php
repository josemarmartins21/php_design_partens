<?php 

class Pessoa04 {
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Funcionario extends Pessoa04 {
    private $cargo;
    private $salario;

    public function contratar($cargo, $salario)
    {
        if (is_numeric($salario) AND $salario > 0) {
            $this->cargo = $cargo;
            $this->salario = $salario;
        }
    }

    public function __toString()
    {
        return "Nome: " . $this->nome . " salário: " . $this->salario . " e cargo ". $this->cargo;
    }
}

$p1 = new Funcionario("Josimar");

$p1->contratar("engeheiro", 200.00);

echo $p1;