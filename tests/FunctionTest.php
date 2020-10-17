<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{

    public function testAddResturnsTheCorrectSum()
    {
        require("function.php");
        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(8, add(3, 5));
    }

    public function testAddDoesNotReturnTheIncorretSum()
    {
        $this->assertNotEquals(5, add(2, 2));
    }
}