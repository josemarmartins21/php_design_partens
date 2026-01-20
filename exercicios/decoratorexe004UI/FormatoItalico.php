<?php

class FormatoItalico implements FormatoInterface {
    public function __construct(private FormatoInterface $formato)
    {
        
    }
    public function format(string $value): string
    {
        $formatoSimples = $this->formato->format($value);
        return "<i>{$formatoSimples}</i>";
    }
}