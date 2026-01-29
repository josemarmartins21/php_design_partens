<?php


class SmsService implements PrecoInterface {
    public function update(float $preco, string $nome): string
    {
        return "O preco do(a) " . $nome . " passou a ser de " . $preco . ". Enviado a partir da Unitel.";
    }
}