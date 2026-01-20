<?php

class HamburguerPedido implements PedidosInterface {
    private float $preco;
    public function __construct()
    {
        $this->preco = 800;
    }
    
    public function pedido(string $pedido): string
    {
        return $pedido;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
}