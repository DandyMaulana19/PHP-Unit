<?php

use PHPUnit\Framework\TestCase;

class AssertSameTest extends TestCase{
    public function testAssertSame(){
        // Passed Assertion
        $this->assertSame(5, 5, "Harusnya sama!");
        
        // Failed Assertion
        $this->assertSame(10,5, "Harusnya false");
    }
}