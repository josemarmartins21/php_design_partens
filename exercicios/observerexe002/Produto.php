<?php


class Produto {
    private $servicos = [];
    public function __construct(
        private Nome $nome,
        private Preco $preco,
    )
    {
        
    }

    public function updatePreco(float $preco): void
    {
        $this->preco->setPrice($preco);
        foreach ($this->servicos as $servico) {
            echo $servico->update($preco, $this->nome->getNome()) . PHP_EOL;
        }
    
    }

    public function add(PrecoInterface $servico)
    {
        $this->servicos[] = $servico;
    }

}