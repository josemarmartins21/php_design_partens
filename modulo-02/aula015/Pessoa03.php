<?php 

class Pessoa03 {
    private $nome;
    private $nascimento;
    private $endereco;

    public function __construct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function setNascimento($data)
    {
        $partes = explode("-", $data);
        if (count($partes) === 3) {
            if (checkdate($partes[1], $partes[2], $partes[0])) {
                $this->nascimento = $data;
                return true;
            }
        }
        return false;
    }
    
}

$pessoa = new Pessoa03("josimar", "camama");

$ok1 = $pessoa->setNascimento("2005-01-12");
$ok2 = $pessoa->setNascimento("1 de fevereiro de 2008");

var_dump($ok1);
var_dump($ok2);

print_r($pessoa);