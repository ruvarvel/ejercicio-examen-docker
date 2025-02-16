<?php

namespace App;
class Calculadora3
{
    public function suma($a, $b)
    {
        return $a + $b;
    }

    public function resta($a, $b)
    {
        return $a - $b;
    }

    public function multiplicacion($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        return $a / $b;
    }

    public function raiz($a)
    {
        return sqrt($a);
    }
}