<?php

namespace CDC\Store\Product;

require './vendor/autoload.php';

use CDC\Store\Cart\ShoppingCart;
use CDC\Store\Cart\HigherAndLower;
use CDC\Store\Product\Product;
use PHPUnit_Framework_TestCase as PHPUnit;

class HigherAndLowerTest extends PHPUnit
{
    public function testInstanceOf(): void
    {
        $shoppingCart = new ShoppingCart();
        
        $shoppingCart->add(new Product('Fogão', 350));
        $shoppingCart->add(new Product('Notebook', 1890));
        $shoppingCart->add(new Product('Smartphone', 750));

        $higherAndLower = new HigherAndLower();
        $higherAndLower->find($shoppingCart);

        $this->assertInstanceOf('CDC\Store\Product\Product', $higherAndLower->getLower());
        $this->assertInstanceOf('CDC\Store\Product\Product', $higherAndLower->getHigher());
    }

    public function testDescendingOrder(): void
    {
        $shoppingCart = new ShoppingCart();
        
        $shoppingCart->add(new Product('Geladeira', 450.00));
        $shoppingCart->add(new Product('Liquidificador', 250.00));
        $shoppingCart->add(new Product('Jogo de pratos', 70.00));

        $higherAndLower = new HigherAndLower();
        $higherAndLower->find($shoppingCart);

        $this->assertEquals('Jogo de pratos', $higherAndLower->getLower()->getName());
        $this->assertEquals('Geladeira', $higherAndLower->getHigher()->getName());
    }

    public function testOnlyOneProduct(): void
    {
        $shoppingCart = new ShoppingCart();

        $shoppingCart->add(new Product('Geladeira', 450.00));

        $higherAndLower = new HigherAndLower();
        $higherAndLower->find($shoppingCart);

        $this->assertEquals('Geladeira', $higherAndLower->getLower()->getName());
        $this->assertEquals('Geladeira', $higherAndLower->getHigher()->getName());
    }
}