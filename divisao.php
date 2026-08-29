<?php

function divisao($a, $b)
{
    if ($b == 0) {
        throw new InvalidArgumentException("Não é possível dividir por zero.");
    }

    return $a / $b;
}