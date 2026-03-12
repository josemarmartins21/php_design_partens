<?php
require_once 'imc.php';

print calcula_imc(12, 20);

$total = 0;
function km2milhas($km) {
    global $total;
    $total += $km;
    return $km * 0.6;
}

/* echo km2milhas(100);
echo km2milhas(100) . PHP_EOL;
echo km2milhas($total); */
/* function percorre(int $km) : void {
    static $total;
    $total += $km;
    print "Percorreu mais $km de $total \n";
}

percorre(100);
percorre(100);
percorre(100);
percorre(100); */

/* function incrementa(int &$variavel, int $valor) : void {
    $variavel += $valor;
}

$teste = 100;
incrementa($teste, 20);
echo "\n";
var_dump($teste); */

/* $lista = ['b', 'a', 'c'];

sort($lista);
var_dump($lista); */
function acao() {
    
}
$remove_acento = function($str) {
    return str_replace(['á', 'ó', 'ú', 'é', 'í'], ['a', 'o', 'u', 'e', 'i'], $str);
};

var_dump($remove_acento("josímár"));
function teste($palavra, $funcao) {
    $palavra = $funcao($palavra);
    return strtoupper($palavra);
}

var_dump(teste("josímár", function($str) {
    return str_replace(['á', 'ó', 'ú', 'é', 'í'], ['a', 'o', 'u', 'e', 'i'], $str);
}));