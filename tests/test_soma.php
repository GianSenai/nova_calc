<?php

require_once __DIR__ . '/../soma.php';

use PHPUnit\Framework\TestCase;

final class test_soma extends TestCase
{
    public function testSoma(): void
    {
        $resultado = soma(10, 5);

        $this->assertEquals(15, $resultado);
    }
}