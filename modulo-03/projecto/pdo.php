<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec("INSERT INTO famosos (id, name) VALUES (DEFAULT, 'Paulina')");
    $conn->exec("INSERT INTO famosos (id, name) VALUES (DEFAULT, 'Paulo')");
    $conn->exec("INSERT INTO famosos (id, name) VALUES (DEFAULT, 'Bruno')");
    
    $conn = null;

} catch (\PDOException $e) {
    print 'Exceção: ' . $e->getMessage() . PHP_EOL;
} finally {
    print 'Fim do processo';
}
?>