<?php
require_once "Disciplina.php";
class Nota {
    private $valor;
    private $disciplina;

    public function __construct($valor, $disciplina)
    {
        $this->valor = $valor;
        $this->disciplina = $disciplina;
    }

    public function getValor() {
        return $this->valor;
    }
}