<?php

namespace CDC\Store\Product;

class Product
{
    private $name;
    private $unitaryValue;
    private $quantity;
    
    public function __construct(string $name, int $quantity, float $unitaryValue)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unitaryValue = $unitaryValue;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUnitaryValue(): float
    {
        return $this->unitaryValue;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getAmount(): float
    {
        return $this->unitaryValue * $this->quantity;
    }
}