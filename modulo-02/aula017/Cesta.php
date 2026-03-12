<?php


class Cesta {
    private string $hora;
    private $items = [];

    public function __construct()
    {
        $this->hora = date("Y-m-d H:i:s");
    }

    public function addItem(Produto $produto)
    {
        $this->items[] = $produto;
    }

    public function getItems(): array
    {
        return $this->items;
    }

}