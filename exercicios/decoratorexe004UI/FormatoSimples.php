<?php

class FormatoSimples implements FormatoInterface {
    public function format(string $value): string
    {
        return "<h2>{$value}</h2>";
    }

}