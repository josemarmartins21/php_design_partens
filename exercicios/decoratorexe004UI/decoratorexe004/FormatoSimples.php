<?php

class FormatoSimples implements FormatoInterface {
    private string $nome;

    public function format(string $value): string
    {
        return "<small>{$value}</small>";
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}