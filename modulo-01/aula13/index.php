<?php
declare(strict_types=1);
$lista = [12, 12, 32, 10, 21];
$valorProcurado = 32;
function nomeMaiusculas($lista, $valorProcurado, callable $buscar) {
    $valor_encontrado = $buscar($lista, $valorProcurado);
    return mostrarValor($valor_encontrado);
}

$valor = nomeMaiusculas($lista, $valorProcurado,function($lista, $valorProcurado) {
    $inicio = 0;
    $fim = count($lista) - 1;
    
    while ($inicio <= $fim) {
        $meio = floor(($inicio + $fim) / 2);
        $chute = $lista[$meio];
        if ($chute === $valorProcurado) {
            return $chute;

        } else if ($valorProcurado < $chute) {
            $fim = $meio - 1;

        } else {
            $inicio = $meio + 1;
        }
        
    }
    return "nada encontrado!";
});

function mostrarValor(int $valor): int {
    return $valor;
}

echo $valor;

