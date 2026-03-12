<?php

// $cores = ['azul', 'laranja', 'lilas', 'amarelo'];

/* $cores = [];
$cores[0] = "Amarelo";
$cores[1] = "Vermelho";
$cores[2] = "Azul";
array_unshift($cores, 'castanho');
var_dump($cores); */

/* $pessoas = [];

$pessoas['nome'] = 'Maria';
$pessoas['endereco'] = 'Camama';
var_dump($pessoas);
foreach ($pessoas as $key => $pessoa) {
    echo $key . " ".  $pessoa  . PHP_EOL;
} */

/* $carros = [
    'ford' => [
        'cor' => 'azul',
        'marca' => 'raptor',
        'ano' => 2020
    ],

    'toyota' => [
        'cor' => 'preto',
        'marca' => 'yaris',
        'ano' => 2012
    ]
];
foreach ($carros as $modelo => $informacoes) {
    echo strtoupper($modelo) . PHP_EOL;
    foreach ($informacoes as $atributo => $valor) {
        echo $atributo . " ". $valor . PHP_EOL;
    }
}
echo $carros['ford']['cor']; */

/* $cores = ['azul', 'laranja', 'lilas', 'amarelo']; */

/* $cores[] = 'ciano'; */
/* array_push($cores, 'ciano'); */
/* array_shift($cores); */

/* $cores = array_reverse($cores); */

/* $res = array_merge($cores, ['cyano', 'majeto']);

var_dump($res); */

$carros = [];

$carros[10001] = 'Paladin'; 
$carros[10003] = 'Corsa 2005'; 
$carros[10004] = 'Corsa 2020'; 
/* sort($carros); */
asort($carros);
ksort($carros);


/* var_dump(array_keys($carros)); */
/* var_dump(array_values($carros));
var_dump(count($carros));
var_dump(in_array('Paladin', $carros)); */
$data = ['2014', '20', '12'];

/* $partes = explode('-', $data);
echo $partes[0] . "/"  . $partes[1] . "/" . $partes[2]; */
$dt = array_reverse($data);
echo implode('/', $dt);