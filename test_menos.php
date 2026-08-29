<?php

require_once 'menos.php';

use PHPUnit\Framework\TestCase;

class MenosTest extends TestCase
{
    public function testMenos()
    {
        $resultado = menos(10, 5);

        $this->assertEquals(5, $resultado);
    }
}