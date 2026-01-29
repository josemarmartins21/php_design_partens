<?php


class SistemaDeReposicao implements StockServiceInterface {
    public function __construct(private int $novaQuantidade)
    {
        
    }
    public function update(int $quantidade): void
    {
        $this->setNovaQuantidade($quantidade);
    }

    public function setNovaQuantidade(int $quantidade): void
    {
        $this->novaQuantidade += $quantidade;
    }
    public function getNovaQuantidade(): int
    {
        return $this->novaQuantidade;
    }
}