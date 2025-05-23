<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index() {
        return view('calculadora');
    }

    public function calcular(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        $op = $request->input('operacion');

        $resultado = match ($op) {
            'sumar' => $a + $b,
            'restar' => $a - $b,
            'multiplicar' => $a * $b,
            'dividir' => $b != 0 ? $a / $b : 'Error: División por cero',
            default => 'Operación no válida'
        };

        return view('calculadora', compact('resultado'));
    }
}
