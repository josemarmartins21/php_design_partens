<?php
require_once __DIR__."/ServiceInterface.php";
require_once __DIR__."/Newlester.php";
require_once __DIR__."/Blog.php";
require_once __DIR__."/NotifierService.php";
require_once __DIR__."/BinanceAPI.php";

try {
    $binance = new BinanceAPI;
    $binance->setPrice(502);
    
    $binance->addService(new Newlester);
    $binance->addService(new Blog);
    $binance->addService(new NotifierService);
    $binance->update(502);
} catch (\Exception $e) {
    print $e->getMessage();
}
