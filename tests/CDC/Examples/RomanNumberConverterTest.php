<?php

namespace CDC\Examples;

require './vendor/autoload.php';

use CDC\Examples\RomanNumberConverter;
use PHPUnit_Framework_TestCase as PHPUnit;

class RomanNumberConverterTest extends PHPUnit
{
    public function testShouldUnderstandSymbolI(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('I');
        
        $this->assertEquals(1, $number);
    }

    public function testShouldUnderstandSymbolV(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('V');

        $this->assertEquals(5, $number);
    }

    public function testShouldUnderstandSymbolX(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('X');

        $this->assertEquals(10, $number);
    }

    public function testShouldUnderstandSymbolL(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('L');

        $this->assertEquals(50, $number);
    }

    public function testShouldUnderstandSymbolC(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('C');

        $this->assertEquals(100, $number);
    }

    public function testShouldUnderstandSymbolD(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('D');

        $this->assertEquals(500, $number);
    }

    public function testShouldUnderstandSymbolM(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('M');

        $this->assertEquals(1000, $number);
    }

    public function testShouldUnderstandSymbolII(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('II');

        $this->assertEquals(2, $number);
    }

    public function testShouldUnderstandSymbolVI(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('VI');

        $this->assertEquals(6, $number);
    }

    public function testShouldUnderstandSymbolVIII(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('VIII');

        $this->assertEquals(8, $number);
    }

    public function testShouldUnderstandSymbolXIII(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('XIII');

        $this->assertEquals(13, $number);
    }

    public function testShouldUnderstandSymbolXVIII(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('XVIII');
        
        $this->assertEquals(18, $number);
    }

    public function testShouldUnderstandSymbolXXII(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('XXII');

        $this->assertEquals(22, $number);
    }

    public function testShouldUnderstandSymbolIV(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('IV');

        $this->assertEquals(4, $number);
    }

    public function testShouldUnderstandSymbolIX(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('IX');

        $this->assertEquals(9, $number);
    }

    public function testShouldUnderstandSymbolXXIV(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('XXIV');

        $this->assertEquals(24, $number);
    }

    public function testShouldUnderstandSymbolDXLIX(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('DXLIX');

        $this->assertEquals(549, $number);
    }

    public function testShouldUnderstandMDXXVIII(): void
    {
        $romanNumberConverter = new RomanNumberConverter();
        $number = $romanNumberConverter->convert('MDXXVIII');

        $this->assertEquals(1528, $number);
    }
}