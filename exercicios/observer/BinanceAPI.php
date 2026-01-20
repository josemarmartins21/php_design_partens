<?php

class BinanceAPI {
    private $services = [];
    private float $price;



    public function update(float $newPrice)
    {
        if ($this->price === $newPrice) {
            throw new \Exception("Preço não Atualizado, verifique se há alterações");
        }

        foreach ($this->services as $service) {
            if ($this->price !== $newPrice) {
               $service->update();             
            }
        }

    }

    public function addService(ServiceInterface $service)
    {
        $this->services[] = $service;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}