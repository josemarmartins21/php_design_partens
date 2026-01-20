<?php

class Cargo {
    private NomeCargo $cargo;
    private $cargos = [
        'eng. sotfware',
        'eng. dados',
        'eng. ml',
        'técnico de redes',
    ];

    public function __construct(string $cargo, $cargos = [])
    {
        
        try {
            $this->validate($cargo);
            $this->cargo = new NomeCargo($cargo);
        } catch (\Exception $e) {
            print $e->getMessage();
        }
    } 

    public function validate(string $cargo)
    {
        if (empty($cargo) || is_numeric($cargo)) {
            throw new \Exception("Cargo inválido");
        }
    }

    public function getNomeCargo(): string
    {
        return $this->cargo->getNomeCargo();
    }

    public function getResponsabilidade(): string
    {
        for ($i=0; $i < count($this->cargos); $i++) { 
            if (strtolower(substr($this->cargos[$i], 0, 4)) === strtolower(substr($this->cargo->getNomeCargo(), 0, 4)) AND strtolower(substr($this->cargo->getNomeCargo(), 0, 4)) === "eng.") {
                return strtoupper("alta");
            }
        }
        
        return strtoupper("baixa");

    }

}