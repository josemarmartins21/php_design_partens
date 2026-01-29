<?php


class EmailService implements PrecoInterface {
    public function update(float $preco, string $nome): string
    {
        return "O preco do(a) " . $nome . " passou a ser de " . $preco . ". Enviado do Meu iPhone.";
    }
}