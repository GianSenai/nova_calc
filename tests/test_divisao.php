<?php

require_once __DIR__ . '/../divisao.php';

use PHPUnit\Framework\TestCase;

final class test_divisao extends TestCase
{
    public function testDivisao(): void
    {
        $resultado = divisao(10, 5);

        $this->assertEquals(2, $resultado);
    }

    public function testDivisaoPorZero(): void
    {
        $this->expectException(InvalidArgumentException::class);

        divisao(10, 0);
    }
}