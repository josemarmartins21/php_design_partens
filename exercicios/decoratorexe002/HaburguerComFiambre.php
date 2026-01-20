<?php

class HaburguerComFiambre implements PedidosInterface {
    private float $preco;
    public function __construct(private PedidosInterface $pedido)
    {
        $this->preco = $pedido->getPreco() + 400;
    }
    public function pedido(string $pedido): string
    {
        return $this->pedido->pedido($pedido) . " e fiambre, peço {$this->preco}R$";
    }

    public function getPreco()
    {
        return $this->preco;
    }
}