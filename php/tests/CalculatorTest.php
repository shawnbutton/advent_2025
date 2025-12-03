<?php

namespace Advent\Tests;

use Advent\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertEquals(5, $this->calculator->add(2, 3));
        $this->assertEquals(0, $this->calculator->add(-1, 1));
        $this->assertEquals(-5, $this->calculator->add(-2, -3));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(1, $this->calculator->subtract(3, 2));
        $this->assertEquals(-2, $this->calculator->subtract(-1, 1));
        $this->assertEquals(1, $this->calculator->subtract(-2, -3));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
        $this->assertEquals(-6, $this->calculator->multiply(-2, 3));
        $this->assertEquals(0, $this->calculator->multiply(0, 5));
    }

    public function testDivide(): void
    {
        $this->assertEquals(2.0, $this->calculator->divide(6, 3));
        $this->assertEquals(2.5, $this->calculator->divide(5, 2));
        $this->assertEquals(-2.0, $this->calculator->divide(-6, 3));
    }

    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot divide by zero');
        $this->calculator->divide(5, 0);
    }
}
