<?php

use PHPUnit\Framework\TestCase;

class AssertTrueTest extends TestCase{
    public function testAssertTrue(){
        // Passed Assertion
        $this->assertTrue(5 > 2);
        // Failed Assertion
        $this->assertTrue(5 < 2, "2 Tidak Lebih Besar dari 5");
        // Passed Assertion
        $this->assertTrue(is_array([1,2,3]), "ini adalah array");
        // Failed Assertion
        $this->assertTrue(is_array(1), "ini bukan array");
    }
}