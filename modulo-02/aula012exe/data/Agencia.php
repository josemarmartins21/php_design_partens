<?php 

class Agencia {
    private string $agencia;

    public function __construct(string $agencia)
    {
        try {
            $this->validate($agencia);
            $this->agencia = $agencia;
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function validate(string $agencia)
    {
        if (!(is_string($agencia) AND strlen($agencia) < 4)) {
            throw new \Exception("O nome da agencia tem que ser maior que 4 \n");
        }
    }

    public function getAgencia()
    {
        return $this->agencia;
    }
}