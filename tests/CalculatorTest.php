<?php
namespace App\Tests;

use App\Calculator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    
    public function testAdd(): void {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
        $this->assertEquals(-5, $calculator->add(-2, -3));
    }

    public function testSubtract(): void {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->subtract(5, 3));
        $this->assertEquals(-8, $calculator->subtract(-5, 3));
    }

    public function testMultiply(): void {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->multiply(2, 3));
        $this->assertEquals(0, $calculator->multiply(0, 3));
        $this->assertEquals(-3, $calculator->multiply(1, -3));
    }

    public function testDivide(): void {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->divide(10, 2));

        // Verificamos que al dividir por cero se lance la excepción correcta
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Denominator cannot be zero");

        $calculator->divide(10, 0);
    }
}