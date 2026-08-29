<?php

require_once 'soma.php';

use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function testSoma()
    {
        $resultado = soma(10, 5);

        $this->assertEquals(15, $resultado);
    }
}