<?php
require_once __DIR__."/Numero.php";
require_once __DIR__."/Nome.php";
class Contacto {
    private Nome $nome;
    private Numero $numero;

    public function __construct(string $nome, string $numero)
    {
        $this->nome = new Nome($nome);
        $this->numero = new Numero($numero);
    }

    public function getNumero(): Numero
    {
        return $this->numero;
    }

    public function getNome(): Nome
    {
        return $this->nome;
    }
}