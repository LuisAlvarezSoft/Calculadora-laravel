<?php

namespace Tests\Feature;

use Tests\TestCase;

class AccesibilidadTest extends TestCase
{
    public function testCamposTienenEtiquetas()
    {
        $response = $this->get('/');

        $response->assertSee('<label', false);
        $response->assertSee('for="a"', false);
        $response->assertSee('for="b"', false);
        $response->assertSee('for="operacion"', false);
    }
}
