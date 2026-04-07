<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=livros', 'root', '');
    
    $resuslts = $conn->query('SELECT * FROM famosos');

    if ($resuslts) {
        //$rows = $resuslts->fetch(PDO::FETCH_OBJ);
        while ($row = $resuslts->fetchObject()) {
            print $row->id . ' - ' . $row->name . '<br>';
        }
    }
    
    $conn = null;

} catch (\PDOException $e) {
    print 'Exceção: ' . $e->getMessage() . PHP_EOL;
} finally {
    print 'Fim do processo';
}
?>