<?php
/* $salario = 1000;
$tempo = 12; */

/* if ($salario > 1000 AND $tempo >= 12) {
    print "Promoção!";
} else {
    print "Sem promoção!";
} */

$valor_venda = 100;

/* if ($valor_venda > 100) {
    $resultado = 'Muito caro';    
} else {
    $resultado = 'Pode comprar!';
}

var_dump($resultado); */

/* $resultado = ($valor_venda > 100) ? 'muito caro': 'pode comprar!';
var_dump($resultado); */

/* $cont = 1;
while ($cont <= 5) {
    print $cont . " ";
    $cont++;
}
 */
/* for ($i=1; $i <= 10; $i++) { 
    print $i ." ";
} */
/* $tipo = 'pdf';

switch ($tipo) {
    case 'pdf':
        print "Arquivo pdf";
        break;
    case 'jpg':
        print "Arquivo jpg";
        break;
    case 'png':
        print "Arquivo png";
        break;
    default:
        print "Arquivo não encontrado";
        break;
} */
$lista = ['maçã', 'laranja', 'banana'];
foreach ($lista as $fruta) {
    echo $fruta . " ";
}