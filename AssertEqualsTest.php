<?php

use PHPUnit\Framework\TestCase;

class AssertEqualsTest extends TestCase{
    public function testAssertEquals(){
        // Passed Assertion
        $this->assertEquals(20, 10 + 10, "Harusnya true!");
        
        // Failed Assertion
        $this->assertEquals(30,10 + 10, "Harusnya false!");
    }
}