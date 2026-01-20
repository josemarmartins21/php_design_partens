<?php

class Numero {
    private string $numero;

    public function __construct(string $numero)
    {
        try {
            $this->validar($numero);
            $this->numero = $numero;
        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    public function validar(string $numero): void
    {
        if (is_numeric($numero) === false) {
            throw new \Exception("O número tem que conter apenas números");
        }
    }

    public function getNumero(): string
    {
        return $this->numero;
    }
}