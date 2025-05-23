<?php

namespace Tests\Feature;

use Tests\TestCase;

class SistemaCalculadoraTest extends TestCase
{
    public function testInterfazCompletaCalculadora()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('<form', false);
        $response->assertSee('name="a"', false);
        $response->assertSee('name="b"', false);
        $response->assertSee('name="operacion"', false);
        $response->assertSee('Calcular');
    }
}
