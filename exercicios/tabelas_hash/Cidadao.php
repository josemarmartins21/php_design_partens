<?php

class Cidadao {
    public function __construct(
        private string $nome
    )
    {
        
    }

    public function votar(Partido $partido)
    {
        $partido->updateNumeroVotos(1);
    }
    public function getNome(): string
    {
        return $this->nome;
    }
}