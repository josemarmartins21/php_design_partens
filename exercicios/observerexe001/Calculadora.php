<?php


class Calculadora {
    private array $opercoes = [];

    public function __construct(
        private int $valor,
    )
    {
        
    }

    public function mostrarCalculos(): void
    {
        if ($this->valor <= 0) {
            throw new Exception("Valor inválido!");
        }
        $this->calcular($this->valor);
    }

    public function calcular(int $valor): void
    {
        foreach ($this->opercoes as $operacao) {
            $operacao->calcular($valor);
        }
    }

    public function addOperacao(OpercaoInterface $operacao)
    {
        $this->opercoes[] = $operacao;
    }

}