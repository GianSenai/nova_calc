<?php

require_once __DIR__ . '/../menos.php';

use PHPUnit\Framework\TestCase;

final class test_menos extends TestCase
{
    public function testMenos(): void
    {
        $resultado = menos(10, 5);

        $this->assertEquals(5, $resultado);
    }
}