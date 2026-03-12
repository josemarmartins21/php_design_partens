<?php

class Funcionario {
    public function getSalario()
    {
        
    }
    public function getNome()
    {
        
    }
    public function getSaldo()
    {
        
    }
}

class Funcionario02 {
    public $nome;
    public $salario;
    }
    
    
class Programador extends Funcionario02 {
    private $bolsa;
}
        
class Contabilista {
    public function calcular()
    {
        
    }
    public function descontar()
    {
        
    }
    public function adicionar()
    {
        
    }
}
$contabilista = new Contabilista;

if (method_exists($contabilista, 'adicionar')) {
    print "ok";
}
if (method_exists($contabilista, 'descontar')) {
    print "ok";
}

var_dump(get_class($funcionario)); // retorna o nome da classe
var_dump(get_class($jose)); // retorna o nome da classe do objecto
print_r(get_parent_class(Programador::class));  // retorna a classe pai de um a class
var_dump(is_subclass_of(Programador::class, Funcionario02::class)); // verifca se uma classe é filha de outra

var_dump(get_object_vars($funcionario)); // retorna os valores dos atributos de um objecto.