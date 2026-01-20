<?php 

class OperacaoSoma implements OpercaoInterface {
    public function calcular(int $valor): void
    {
        print "Soma" . PHP_EOL;
        print $valor + 10 . PHP_EOL;
    }
}