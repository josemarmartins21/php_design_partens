<?php

class Salario {
    private float $salario;

    public function __construct(float $salario)
    {
        try {
            $this->validate($salario);
            $this->salario = $salario;
        } catch (\Exception $e) {
            print $e->getMessage();
        }
    }

    public function validate(float $salario)
    {
        if (filter_var($salario, FILTER_VALIDATE_FLOAT) === false) {
            throw new Exception("Salário inválida");
        }
    }

    public function getSalario(): float
    {
        return $this->salario;
    }
}