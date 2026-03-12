<?php

/* $nome = "maria";
$sobrenome = "joana"; */
/* $nome_completo = $nome . " " . $sobrenome; */
/* $nome_completo = "{$nome} {$sobrenome}";
print $nome_completo; */

/* var_dump($nome_completo); */
/* $a = "aspas1";
print " Exemplo de '{$a}' ";
print ' Exemplo de "aspas" '; */

/* print 'Exmplo de \'aspas\' '; */

$nome = "maria";
$sobrenome = "joana";
$nome_completo = $nome . " " . $sobrenome; 
print strtoupper("{$nome_completo}") . PHP_EOL;
print strtolower("{$nome_completo}")  . PHP_EOL;
print strlen($nome_completo) . PHP_EOL;
print substr($nome_completo, 0, 5) . "..." . PHP_EOL;
print substr($nome_completo, -3) . "..." . PHP_EOL;
print str_replace("joana", "Martins", $sobrenome);