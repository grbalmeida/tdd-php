<?php

namespace CDC\Store\Cart;

use CDC\Store\Test\TestCase;
use CDC\Store\Cart\ShoppingCart;
use CDC\Store\Product\Product;

class ShoppingCartTest extends TestCase
{
    private $shoppingCart;

    public function setUp(): void
    {
        $this->shoppingCart = new ShoppingCart();
        parent::setUp();
    }

    public function testShouldCartToBeEmpty(): void
    {
        $this->assertEmpty($this->shoppingCart->getProducts());
    }

    public function testShouldCartToBeNotEmpty(): void
    {
        $this->shoppingCart->add(new Product('Ventilador', 1, 89.90));
        $this->assertNotEmpty($this->shoppingCart->getProducts());
    }

    public function testShouldCartMustHaveFourItems(): void
    {
        $this->shoppingCart->add(new Product('Smartphone', 1, 1299.00));
        $this->shoppingCart->add(new Product('Lavadora de roupas', 1, 1386.00));
        $this->shoppingCart->add(new Product('Smart TV', 1, 1595.00));
        $this->shoppingCart->add(new Product('Panela Elétrica', 1, 89.90));

        $this->assertCount(4, $this->shoppingCart->getProducts());
    }

    public function testShouldReturnZeroIfCartIsEmpty(): void
    {
        $highestValue = $this->shoppingCart->highestValue();

        $this->assertEquals(0, $highestValue, null, 0.0001);
    }

    public function testShouldReturnItemValueIfCartHasASingleElement(): void
    {
        $this->shoppingCart->add(new Product('Guarda-Roupa', 1, 900.00));

        $highestValue = $this->shoppingCart->highestValue();

        $this->assertEquals(900.00, $highestValue, null, 0.0001);
    }

    public function testShouldReturnTheHighestValueIfCartHasManyElements(): void
    {
        $this->shoppingCart->add(new Product('Jogo de Toalha Santista', 1, 34.99));
        $this->shoppingCart->add(new Product('Fone de Ouvido', 1, 45.90));
        $this->shoppingCart->add(new Product('Smart TV', 1, 2148.05));
        $this->shoppingCart->add(new Product('Pen Drive 16GB', 1, 34.90));

        $highestValue = $this->shoppingCart->highestValue();

        $this->assertEquals(2148.05, $highestValue, null, 0.0001);
    }
}