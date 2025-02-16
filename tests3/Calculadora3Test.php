<?php

namespace tests3;

use PHPUnit\Framework\TestCase;
use App\Calculadora3;

class Calculadora3Test extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora3();
        $resultado = $calc->suma(3, 2);
        $this->assertEquals(5, $resultado);
        $this->assertSame(5, $resultado);
        $this->assertGreaterThan(4, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testResta()
    {
        $calc = new Calculadora3();
        $resultado = $calc->resta(3, 2);
        $this->assertEquals(1, $resultado);
        $this->assertGreaterThan(0, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testMultiplicacion()
    {
        $calc = new Calculadora3();
        $resultado = $calc->multiplicacion(3, 2);
        $this->assertEquals(6, $resultado);
        $this->assertGreaterThan(0, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testDivision()
    {
        $calc = new Calculadora3();
        $resultado = $calc->division(4, 2);
        $this->assertEquals(2, $resultado);
        $this->assertGreaterThan(0, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testRaiz()
    {
        $calc = new Calculadora3();
        $resultado = $calc->raiz(4);
        $this->assertEquals(2, $resultado);
        $this->assertGreaterThan(0, $resultado);
        $this->assertNotNull($resultado);
    }
}

