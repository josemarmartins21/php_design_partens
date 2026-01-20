<?php
require_once __DIR__."/Inicializador.php";

try {
    $i = new Inicializador('test.php');
    $i->lerInFile();
} catch (FileNotFoundException $e) {
    print $e->getMessage();
} catch (Exception $e) {
    print "Exceção desconhecida!";
}

try {
    $i = new Inicializador('xpto.php');
    $i->lerInFile();
} catch (FilePermissionDaniedException $e) {
    echo($e->getMessage());
} catch (Exception $e) {
    print "Exceção desconhecida!";
}