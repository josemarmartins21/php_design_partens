<?php

class FormatoColorido implements FormatoInterface {
    public function __construct(
        private FormatoInterface $formato, 
        private string $color,
        private int $fontSize,
    )
    {
        
    }
    public function format(string $value): string
    {
        $formatado = $this->formato->format($value);
        return "<a href='#' style='color: {$this->color}; font-size: {$this->fontSize}px;'>{$formatado}</a>";    
    }
}