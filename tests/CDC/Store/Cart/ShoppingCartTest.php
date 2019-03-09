<?php

namespace CDC\Store\Cart;

use CDC\Store\Test\TestCase;
use CDC\Store\Cart\ShoppingCart;
use CDC\Store\Product\Product;

class ShoppingCartTest extends TestCase
{
    public function testShouldReturnZeroIfCartIsEmpty(): void
    {
        $shoppingCart = new ShoppingCart();
        $highestValue = $shoppingCart->highestValue();

        $this->assertEquals(0, $highestValue, null, 0.0001);
    }

    public function testShouldReturnItemValueIfCartHasASingleElement(): void
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add(new Product('Guarda-Roupa', 1, 900.00));

        $highestValue = $shoppingCart->highestValue();

        $this->assertEquals(900.00, $highestValue, null, 0.0001);
    }

    public function testShouldReturnTheHighestValueIfCartHasManyElements(): void
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add(new Product('Jogo de Toalha Santista', 1, 34.99));
        $shoppingCart->add(new Product('Fone de Ouvido', 1, 45.90));
        $shoppingCart->add(new Product('Smart TV', 1, 2148.05));
        $shoppingCart->add(new Product('Pen Drive 16GB', 1, 34.90));

        $highestValue = $shoppingCart->highestValue();

        $this->assertEquals(2148.05, $highestValue, null, 0.0001);
    }
}