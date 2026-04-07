<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
    
    $resuslts = $conn->query('SELECT * FROM famosos');

    if ($resuslts) {
        foreach ($resuslts as $resuslt) {
            print $resuslt['id'] . ' - ' . $resuslt['name'] . '<br>';
        }
    }
    
    $conn = null;

} catch (\PDOException $e) {
    print 'Exceção: ' . $e->getMessage() . PHP_EOL;
} finally {
    print 'Fim do processo';
}
?>