<?php

namespace CDC\Examples;

require './vendor/autoload.php';

use CDC\Examples\RomanNumberConverter;

class RomanNumberConverterTest extends \CDC\Store\Test\TestCase
{
    private $romanNumberConverter;

    public function setUp(): void
    {
        $this->romanNumberConverter = new RomanNumberConverter();
        parent::setUp();
    }

    public function testShouldUnderstandSymbolI(): void
    {
        $number = $this->romanNumberConverter->convert('I');
        
        $this->assertEquals(1, $number);
    }

    public function testShouldUnderstandSymbolV(): void
    {
        $number = $this->romanNumberConverter->convert('V');

        $this->assertEquals(5, $number);
    }

    public function testShouldUnderstandSymbolX(): void
    {
        $number = $this->romanNumberConverter->convert('X');

        $this->assertEquals(10, $number);
    }

    public function testShouldUnderstandSymbolL(): void
    {
        $number = $this->romanNumberConverter->convert('L');

        $this->assertEquals(50, $number);
    }

    public function testShouldUnderstandSymbolC(): void
    {
        $number = $this->romanNumberConverter->convert('C');

        $this->assertEquals(100, $number);
    }

    public function testShouldUnderstandSymbolD(): void
    {
        $number = $this->romanNumberConverter->convert('D');

        $this->assertEquals(500, $number);
    }

    public function testShouldUnderstandSymbolM(): void
    {
        $number = $this->romanNumberConverter->convert('M');

        $this->assertEquals(1000, $number);
    }

    public function testShouldUnderstandSymbolII(): void
    {
        $number = $this->romanNumberConverter->convert('II');

        $this->assertEquals(2, $number);
    }

    public function testShouldUnderstandSymbolVI(): void
    {
        $number = $this->romanNumberConverter->convert('VI');

        $this->assertEquals(6, $number);
    }

    public function testShouldUnderstandSymbolVIII(): void
    {
        $number = $this->romanNumberConverter->convert('VIII');

        $this->assertEquals(8, $number);
    }

    public function testShouldUnderstandSymbolXIII(): void
    {
        $number = $this->romanNumberConverter->convert('XIII');

        $this->assertEquals(13, $number);
    }

    public function testShouldUnderstandSymbolXVIII(): void
    {
        $number = $this->romanNumberConverter->convert('XVIII');
        
        $this->assertEquals(18, $number);
    }

    public function testShouldUnderstandSymbolXXII(): void
    {
        $number = $this->romanNumberConverter->convert('XXII');

        $this->assertEquals(22, $number);
    }

    public function testShouldUnderstandSymbolIV(): void
    {
        $number = $this->romanNumberConverter->convert('IV');

        $this->assertEquals(4, $number);
    }

    public function testShouldUnderstandSymbolIX(): void
    {
        $number = $this->romanNumberConverter->convert('IX');

        $this->assertEquals(9, $number);
    }

    public function testShouldUnderstandSymbolXXIV(): void
    {
        $number = $this->romanNumberConverter->convert('XXIV');

        $this->assertEquals(24, $number);
    }

    public function testShouldUnderstandSymbolDXLIX(): void
    {
        $number = $this->romanNumberConverter->convert('DXLIX');

        $this->assertEquals(549, $number);
    }

    public function testShouldUnderstandMDXXVIII(): void
    {
        $number = $this->romanNumberConverter->convert('MDXXVIII');

        $this->assertEquals(1528, $number);
    }
}