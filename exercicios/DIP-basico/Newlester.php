<?php


class Newlester {
    public function enviar(MensagemInterface $mensagem, string $corpoMensagem)
    {
        if (strlen($corpoMensagem) === 0) {
            throw new \Exception("Nenuma mensagem foi digitada!");
        }
        $mensagem->enviar($corpoMensagem);
            
    }
}