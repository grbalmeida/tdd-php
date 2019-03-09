<?php

namespace CDC\Store\Cart;

use CDC\Store\Cart\ShoppingCart;
use CDC\Store\Product\Product;

class HigherAndLower
{
    private $higher;
    private $lower;

    public function find(ShoppingCart $shoppingCart): void
    {
        foreach ($shoppingCart->getProducts() as $product) {
            if (empty($this->lower) || $product->getValue() < $this->lower->getValue()) {
                $this->lower = $product;
            }

            if (empty($this->higher) || $product->getValue() > $this->higher->getValue()) {
                $this->higher = $product;
            }
        }
    }

    public function getLower(): Product
    {
        return $this->lower;
    }

    public function getHigher(): Product
    {
        return $this->higher;
    }
}