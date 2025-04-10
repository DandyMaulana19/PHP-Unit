<?php

use PHPUnit\Framework\TestCase;

class AssertContainsTest extends TestCase{
    public function testAssertContains(){
        $buah = ['apel', 'jeruk', 'durian'];
        
        // Passed Assertion
        $this->assertContains('apel', $buah, "apel ada di dalam Array");
        
        // Failed Assertion
        $this->assertContains('anggur', $buah, "Tidak ada buah tersebut di dalam Array");
    }
}