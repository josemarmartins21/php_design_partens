<?php


class Preco {
    private float $preco;
    public function __construct(float $preco)
    {
        $this->validate($preco); 
        $this->preco = $preco;  
    }

    public function validate(float $preco): void
    {
        if ($preco <= 0 || ! $preco) {
            throw new \Exception("Preço inválido");
        }
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPrice(float $preco): void
    {
        $this->validate($preco);
        if ($preco === $this->preco) {
            throw new Exception("Preço já actualizado!"); 
        }
        $this->preco = $preco;
    }
}