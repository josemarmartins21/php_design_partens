<?php
declare(strict_types=1);
class SalvarDadoCliente {
    public function __construct(private Cliente $cliente, private $dados = [])
    {
        
    }
    public function salvarDadosClientes(DadosClienteEngine $validador): string
    {
        if (!$validador->validarDadosClientes($this->cliente)) {
            return "Dados inválidos!";
        }
        $this->dados[0] = $this->cliente->nome;
        $this->dados[1] = $this->cliente->idade;
        $this->dados[2] = $this->cliente->status;
        
       return $validador->validarDadosClientes($this->cliente);
    }

    public function mostrarDados()
    {
        foreach ($this->dados as $dado) {
            echo $dado . PHP_EOL;
        }
    }
}

class DadosClienteEngine {
    public function validarDadosClientes(Cliente $cliente): string|bool
    {
        if (strlen($cliente->nome) < 8 || !is_int($cliente->idade) || !$cliente->status) {
            return false;
        }
        return "Dados válidados com sucesso!";
    }
}

class Cliente {
    public function __construct(public string $nome, public int $idade, public bool $status)
    {
        
    }
}

$cliente = new Cliente("josimar martins", 18, TRUE);
$dadosEngine = new DadosClienteEngine;
$persistente = new SalvarDadoCliente($cliente, []);

echo $persistente->salvarDadosClientes($dadosEngine) . PHP_EOL;
$persistente->mostrarDados();


