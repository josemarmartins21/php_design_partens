<?php

class DuploQueijoPedido implements PedidosInterface {
    private float $preco;
    public function __construct(private PedidosInterface $pedido)
    {
        $this->preco = $pedido->getPreco() + 200;
    }
    public function pedido(string $pedido): string
    {
        return $this->pedido->pedido($pedido) . ", com queijo";
    }

    public function getPreco()
    {
        return $this->preco;
    }
}