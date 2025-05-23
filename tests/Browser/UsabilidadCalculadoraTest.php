<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UsabilidadCalculadoraTest extends DuskTestCase
{
    public function testUsoBasicoDeLaCalculadora()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('a', '10')
                ->type('b', '5')
                ->select('operacion', 'restar')
                ->press('#btn-calcular')
                ->waitForText('Resultado:')
                ->assertSeeIn('.resultado', '5');
        });
    }
}
