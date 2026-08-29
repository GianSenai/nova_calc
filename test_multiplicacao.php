<?php

require_once 'multiplicacao.php';

use PHPUnit\Framework\TestCase;

class MultiplicacaoTest extends TestCase
{
    public function testMultiplicacao()
    {
        $resultado = multiplicacao(10, 5);

        $this->assertEquals(50, $resultado);
    }
}