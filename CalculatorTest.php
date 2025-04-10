<?php

require 'Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }

    public function testAdd(){
        $this->assertEquals(5, $this->calculator->add(2, 3), "2 + 3 should equal 5");
        $this->assertEquals(0, $this->calculator->add(-1, 1), "-1 + 1 should equal 0");
    }
    
    public function testSubstract(){
        $this->assertEquals(1, $this->calculator->substract(3, 2), "3 - 2 should equal 1");
        $this->assertEquals(-2, $this->calculator->substract(-1, 1), "-1 - 1 should equal -2");
    }
    
    public function testMultiply(){
        $this->assertEquals(6, $this->calculator->multiply(2, 3), "2 * 3 should equal 6");
        $this->assertEquals(-1, $this->calculator->multiply(-1, 1), "-1 * 1 should equal -1");
    }
    
    public function testDivide(){
        $this->assertEquals(2, $this->calculator->divide(6, 3), "6 / 3 should equal 2");
        $this->assertEquals(-1, $this->calculator->divide(-2, 2), "-2 / 2 should equal -1");
    
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero not allowed");
        $this->calculator->divide(1, 0);

    }
}
