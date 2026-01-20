<?php


class ContaDeFundos extends ContaCorrente {
    public function retirar($quantia)
    {
        $this->saldo -= $quantia;  
    }
}