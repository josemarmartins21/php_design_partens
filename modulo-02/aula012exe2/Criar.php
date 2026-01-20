<?php

class Criar {
    public function create(string $extension): FicheiroInterface
    {
        if ($extension === 'png') {
            return new Png;
        }

        if ($extension === 'pdf') {
            return new Pdf;
        }

        throw new \Exception("Tipo de ficheiro inválido!");
    }
}