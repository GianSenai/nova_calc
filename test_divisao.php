<?php

require_once 'divisao.php';

use PHPUnit\Framework\TestCase;

class DivisaoTest extends TestCase
{
    public function testDivisao()
    {
        $resultado = divisao(10, 5);

        $this->assertEquals(2, $resultado);
    }

    public function testDivisaoPorZero()
    {
        $this->expectException(InvalidArgumentException::class);

        divisao(10, 0);
    }
}