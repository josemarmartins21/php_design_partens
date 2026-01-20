<?php
require_once __DIR__. "/FicheiroInterface.php";
require_once __DIR__ . "/Pdf.php";
require_once __DIR__ . "/Png.php";
require_once __DIR__."/Criar.php";


try {
    
    $creator = new Criar;

    $png = $creator->create('png');
    $pdf = $creator->create('pdf');

    $png->upload();
    $pdf->upload();
} catch (\Exception $e) {
    print("{$e->getMessage()}");
}