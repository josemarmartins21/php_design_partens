<?php


class Sms implements MensagemInterface {
    public function enviar(string $corpoMensagem): void
    {
        print $corpoMensagem . "\n";
        print "Mensagem enviada!";
    }
}