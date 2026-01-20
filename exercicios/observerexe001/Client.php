<?php
require_once __DIR__ ."/OpercaoInterface.php";
require_once __DIR__ ."/OperacaoSoma.php";
require_once __DIR__ ."/OperacaoSubtracao.php";
require_once __DIR__ ."/OperacaoMultiplicar.php";
require_once __DIR__ ."/Calculadora.php";


try {
    $calculador = new Calculadora(20);

    $calculador->addOperacao(new OperacaoSoma());
    $calculador->addOperacao(new OperacaoSubtracao());
    $calculador->addOperacao(new OperacaoMultiplicar());

    $calculador->mostrarCalculos();
    
} catch (\Exception $e) {
    print $e->getMessage();
}