<?php

namespace CDC\Store\Product;

require './vendor/autoload.php';

use CDC\Store\Cart\ShoppingCart;
use CDC\Store\Cart\HigherAndLower;
use CDC\Store\Product\Product;

class HigherAndLowerTest extends \CDC\Store\Test\TestCase
{
    public function testInstanceOf(): void
    {
        $shoppingCart = new ShoppingCart();
        
        $shoppingCart->add(new Product('Fogão', 1, 350));
        $shoppingCart->add(new Product('Notebook', 1, 1890));
        $shoppingCart->add(new Product('Smartphone', 1, 750));

        $higherAndLower = new HigherAndLower();
        $higherAndLower->find($shoppingCart);

        $this->assertInstanceOf('CDC\Store\Product\Product', $higherAndLower->getLower());
        $this->assertInstanceOf('CDC\Store\Product\Product', $higherAndLower->getHigher());
    }

    public function testAscendingOrder(): void
    {
        $shoppingCart = new ShoppingCart();

        $shoppingCart->add(new Product('Máquina de lavar', 1, 750.00));
        $shoppingCart->add(new Product('Geladeira', 1, 900.00));
        $shoppingCart->add(new Product('Fogão', 1, 1500.00));

        $higherAndLower = new HigherAndLower();
        $higherAndLower->find($shoppingCart);

        $this->assertEquals('Máquina de lavar', $higherAndLower->getLower()->getName());
        $this->assertEquals('Fogão', $higherAndLower->getHigher()->getName());
    }

    public function testDescendingOrder(): void
    {
        $shoppingCart = new ShoppingCart();
        
        $shoppingCart->add(new Product('Geladeira', 1, 450.00));
        $shoppingCart->add(new Product('Liquidificador', 1, 250.00));
        $shoppingCart->add(new Product('Jogo de pratos', 1, 70.00));

        $higherAndLower = new HigherAndLower();
        $higherAndLower->find($shoppingCart);

        $this->assertEquals('Jogo de pratos', $higherAndLower->getLower()->getName());
        $this->assertEquals('Geladeira', $higherAndLower->getHigher()->getName());
    }

    public function testOnlyOneProduct(): void
    {
        $shoppingCart = new ShoppingCart();

        $shoppingCart->add(new Product('Geladeira', 1, 450.00));

        $higherAndLower = new HigherAndLower();
        $higherAndLower->find($shoppingCart);

        $this->assertEquals('Geladeira', $higherAndLower->getLower()->getName());
        $this->assertEquals('Geladeira', $higherAndLower->getHigher()->getName());
    }
}