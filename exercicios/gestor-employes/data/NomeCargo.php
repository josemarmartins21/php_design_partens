<?php

class NomeCargo {
    private string $cargo;

    public function __construct(string $cargo)
    {
        try {
            $this->validate($cargo);
            $this->cargo = $cargo;
        } catch (\Exception $e) {
            print $e->getMessage();
        }
    }

    public function validate(string $cargo): void
    {
        if (!is_string($cargo) || strlen($cargo) > 20) {
            throw new \Exception("Cargo inválido");
        }
    }

    public function getNomeCargo(): string
    {
        return $this->cargo;
    }
}