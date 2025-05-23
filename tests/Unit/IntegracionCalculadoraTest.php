<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IntegracionCalculadoraTest extends TestCase
{
    public function testFlujoSumaDesdeFormulario()
    {
        $response = $this->post('/calcular', [
            'a' => 7,
            'b' => 3,
            'operacion' => 'sumar'
        ]);

        $response->assertStatus(200);
        $response->assertSeeText('Resultado: 10');
    }
}
