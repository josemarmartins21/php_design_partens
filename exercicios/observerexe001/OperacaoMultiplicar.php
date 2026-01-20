<?php 

class OperacaoMultiplicar implements OpercaoInterface {
    public function calcular(int $valor): void
    {
        print "Multiplicação" . PHP_EOL;
        print $valor * 10 . PHP_EOL;
    }
}