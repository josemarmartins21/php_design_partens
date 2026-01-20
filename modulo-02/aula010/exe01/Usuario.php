<?php

require_once __DIR__."/Nome.php";
require_once __DIR__."/Numero.php";
require_once __DIR__."/Contacto.php";

class Usuario {
    private Nome $nome;
    private Numero $numero;
    private array $contacto = [];

    public function __construct(string $nome, string $numero)
    {
        $this->nome = new Nome($nome);
        $this->numero = new Numero($numero);
    }

    public function getContacto(): array
    {
        return $this->contacto;
    }

    public function addContacto(Contacto $contacto): void
    {
        $this->contacto[] = $contacto;
    }
}