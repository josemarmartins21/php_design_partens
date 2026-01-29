<?php

require_once __DIR__."/PrecoInterface.php";
require_once __DIR__."/Preco.php";
require_once __DIR__."/Nome.php";
require_once __DIR__."/Produto.php";
require_once __DIR__."/EmailService.php";
require_once __DIR__."/SmsService.php";
require_once __DIR__."/LogService.php";
try {
    $produto = new Produto(new Nome("Nocal"), new Preco(350.00));
    $produto->add(new EmailService);
    $produto->add(new SmsService);
    $produto->add(new LogService);
    $produto->updatePreco(400.00);
} catch (\Exception $e) {
    print $e->getMessage();
}