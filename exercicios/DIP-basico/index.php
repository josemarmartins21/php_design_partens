<?php

require_once __DIR__."/MensagemInterface.php";
require_once __DIR__."/Sms.php";
require_once __DIR__."/Email.php";
require_once __DIR__."/WhatsappMensagem.php";
require_once __DIR__."/Newlester.php";


try {
    $newlester = new Newlester;
    $sms = new Sms;
    $newlester->enviar($sms, "");
} catch (\Exception $e) {
    print $e->getMessage();
}
