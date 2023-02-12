<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
   
    public function testAddition()
    {
        $result = 1 + 1;
        $this->assertEquals(2, $result, "1 + 1 doit etre egal à 2");
    }

    public function testStringLength()
    {
        $string = "Salut";
        $length = strlen($string);
        $this->assertEquals(5, $length, "la longueur de la chaine doit etre 5");
    }
}