<?php


class Stock {
    private int $stock;
    private int $minStock;
    private $obeservers = [];

    public function __construct()
    {
        $this->minStock = 5;
    }

    public function refreshStock(): void
    {
        if ($this->stock <= $this->minStock) {
            foreach ($this->obeservers as $observer) {
                $observer->update($this->stock);
            }
        }
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function add(StockServiceInterface $observer): void
    {
        $this->obeservers[] = $observer;
    }

    public function getStock(): int
    {
        return $this->stock;
    }
}