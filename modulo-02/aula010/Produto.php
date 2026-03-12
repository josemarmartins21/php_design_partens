<?php

class Produto {
    private $desc;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    public function __construct($desc, $estoque, $preco)
    {
        $this->desc = $desc;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->caracteristicas = [];
    }

    public function getDesc()
    {
        return $this->desc;
    }

  /*   public function setFabricante(Fabricante $fabricante) {
        $this->fabricante = $fabricante;
    } */

    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function addCaracteristica($nome, $valor)
    {
         $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }
}