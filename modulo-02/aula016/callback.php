<?php


function apresenta($nome) {
    print "Olá $nome";
}

class Pessoa {
    public static function apresenta($nome)
    {
        print "Olá $nome";
    }
}
$funcao = 'apresenta';

//call_user_func($funcao, 'Josimar'); // chama a função e executa
$obj = new Pessoa;
$pessoa = 'Pessoa';
$funcao = 'apresenta';
call_user_func([$pessoa, $funcao,], "Josimar"); // com a classe
call_user_func([$obj, $funcao,], "Josimar"); // com objecto