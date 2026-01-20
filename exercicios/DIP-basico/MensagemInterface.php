<?php


interface MensagemInterface {
    public function enviar(string $corpoMensagem): void;
}