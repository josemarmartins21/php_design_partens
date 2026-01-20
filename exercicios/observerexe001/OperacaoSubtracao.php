<?php 

class OperacaoSubtracao implements OpercaoInterface {
    public function calcular(int $valor): void
    {
        print "Subtração" . PHP_EOL;
        print $valor - 10 . PHP_EOL;
    }
}