<?php 

class NumeroConta {
    private string $numeroConta;

    public function __construct(string $numeroConta)
    {
        try {
            $this->validate($numeroConta);
            $this->numeroConta = $numeroConta;
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function validate(string $numeroConta)
    {
        if (!(is_string($numeroConta) AND strlen($numeroConta) < 9)) {
            throw new \Exception("O número da conta tem que ser menor que 9");
        }
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }
}