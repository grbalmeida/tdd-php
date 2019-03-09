<?php

namespace CDC\Store\Product;

class Product
{
    private $name;
    private $value;
    
    public function __construct(string $name, float $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}