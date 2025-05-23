<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SumaUnitTest extends TestCase
{
    public function testSuma()
    {
        $a = 4;
        $b = 6;
        $resultado = $a + $b;

        $this->assertEquals(10, $resultado, "La suma de $a + $b debe ser 10");
    }
}
