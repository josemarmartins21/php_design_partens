<?php

class Voto {
    private $votos = [];
    private Cidadao $cidadao;
    private Partido $partido;
    private $preVotos = [
        'jurelma',
        'eri',
        'josemar',
    ];

    public function __construct()
    {
        foreach ($this->preVotos as $voto) {
            $this->votar($voto);
        }
    }

    public function getVoto(string $nome): bool
    {
        if (isset($this->votos[$nome]) === false) {
            throw new \InvalidArgumentException("O seu nome n foi encontrado em nossos registros");
        }
        return true;
    }
    
    public function votar(Partido $partido, Cidadao $cidadao)
    {
        if (! isset($this->preVotos[$cidadao])) {
            throw new \InvalidArgumentException("O seu nome já está associado a um voto");
        }
        $cidadao->votar($partido);
    }
    /* public function votar(string $nome): string
    {
        if (isset($this->votos[$nome]) === false) {
            $this->votos[$nome] = true;
            return "Voto efectuado com sucesso!";
        }
    } */

    public function cancelarVoto(string $nome): void
    {   
        if (! isset($this->votos[$nome])) {
            throw new \InvalidArgumentException("O seu nome n foi encontrado em nossos registros");
        }
        unset($this->votos[$nome]);
    }
}