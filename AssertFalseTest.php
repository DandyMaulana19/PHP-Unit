<?php

use PHPUnit\Framework\TestCase;

class AssertFalseTest extends TestCase{
    public function testAssertFalse(){
        $value = 24; 
        $condition = is_string($value);
        
        // Passed Assertion
        $this->assertFalse($condition,"Value ini string");
        
        // Failed Assertion
        $this->assertFalse(true,"Harusnya false");
    }
}