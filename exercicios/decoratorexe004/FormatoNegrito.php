<?php

class FormatoNegrito implements FormatoInterface {
    private string $nome;
    public function __construct(private FormatoInterface $formato)
    {
        
    }
    public function format(string $value): string
    {
        $formatoSimples = $this->formato->format($value);
        return "<strong>{$formatoSimples}</strong>";
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}