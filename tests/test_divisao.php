<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/divisao.php';

class test_divisao extends TestCase
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