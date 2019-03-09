<?php

namespace CDC\Store\Cart;

use CDC\Store\Product\Product;
use ArrayObject;

class ShoppingCart
{
    private $products;

    public function __construct()
    {
        $this->products = new ArrayObject();
    }

    public function add(Product $product): ShoppingCart
    {
        $this->products->append($product);
        return $this;
    }

    public function getProducts(): ArrayObject
    {
        return $this->products;
    }

    public function highestValue(): float
    {
        if (count($this->getProducts()) === 0) {
            return 0;
        }

        $highestValue = $this->getProducts()[0]->getUnitaryValue();

        foreach ($this->getProducts() as $product) {
            if ($highestValue < $product->getUnitaryValue()) {
                $highestValue = $product->getUnitaryValue();
            }
        }

        return $highestValue;
    }
}