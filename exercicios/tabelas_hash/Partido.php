<?php


class Partido {
    
    private int  $numeroVotos;

    public function __construct(
        private string $nome,
    )
    {
        $this->numeroVotos = 0;
    }

    public function updateNumeroVotos(int $numeroVotos)
    {
        $this->numeroVotos += $numeroVotos;
    }
}