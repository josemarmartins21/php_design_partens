<?php
declare(strict_types=1);

// var_dump('4' + '5');

function calcula_imc(float $peso, float $altura): int | float {
    var_dump($peso, $altura);
    return $peso / ($altura * $altura);
}
$peso = '75';
var_dump(calcula_imc((float)$peso, 1.76));