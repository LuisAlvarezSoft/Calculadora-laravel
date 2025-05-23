<?php

namespace Tests\Feature;

use Tests\TestCase;

class RendimientoCalculadoraTest extends TestCase
{
    public function testTiempoDeRespuesta()
    {
        $start = microtime(true);

        for ($i = 0; $i < 100; $i++) {
            $this->post('/calcular', [
                'a' => rand(1, 100),
                'b' => rand(1, 100),
                'operacion' => 'multiplicar'
            ]);
        }

        $end = microtime(true);
        $duracion = $end - $start;

        $this->assertLessThan(3, $duracion, "La prueba de carga tomó demasiado tiempo: {$duracion}s");
    }
}
