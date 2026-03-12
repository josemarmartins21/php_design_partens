<?php
$produtos = [
   'gasosa' => 'astro',
   'cerveja' => 'cuca',
   'vinho' => 'fresco',
    'cigarros' => 'SL',
    'Whyskes' => 'Casa Velha',
];

/* $produtos2 = [
    'cigarros' => 'SL',
    'Whyskes' => 'Casa Velha',
]; */

/* $a = array_pad($produtos, 6, "whote"); */
/* $b = array_reverse($produtos, true);
var_dump($b); */

/* $mesclados = array_merge($produtos, $produtos2);

$b = array_reverse($mesclados, true);
var_dump($b); */

/* print_r(array_keys($produtos, 'astro')); */

$values = array_values($produtos);

$slice = array_slice($values, 2,20);
var_dump($slice);