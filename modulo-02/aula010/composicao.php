<?php
require_once __DIR__ . "/Produto.php";
class Cesta {
    private $hora;
    private $items = [];

    public function __construct()
    {
        $this->hora = date("Y-m-d H:i:s");
    }

    public function addIem(Produto $produto)
    {
        $this->items[] = $produto;
    }

    public function getItems()
    {
        return $this->items;
    }


}