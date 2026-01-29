<?php


require_once __DIR__."/Voto.php";

try {
    $voto = new Voto();
    
   $voto->votar("eri");
    
} catch (\InvalidArgumentException $e) {
    print $e->getMessage();
}