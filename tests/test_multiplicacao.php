<?php

require_once __DIR__ . '/../multiplicacao.php';

use PHPUnit\Framework\TestCase;

final class test_multiplicacao extends TestCase
{
    public function testMultiplicacao(): void
    {
        $resultado = multiplicacao(10, 5);

        $this->assertEquals(50, $resultado);
    }
}