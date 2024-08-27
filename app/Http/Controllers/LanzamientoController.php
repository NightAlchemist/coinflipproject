<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanzamientoController extends Controller
{
    public function lanzamientoA(Request $request)
    {
        $resultado = 'cara';
        $correcto = $request->input('eleccion') == $resultado;
        return $this->resultado($resultado, $correcto);
    }

    public function lanzamientoB(Request $request)
    {
        $resultado = 'cruz';
        $correcto = $request->input('eleccion') == $resultado;
        return $this->resultado($resultado, $correcto);
    }

    public function lanzamientoC(Request $request)
    {
        $resultado = $request->input('eleccion');
        $correcto = true; // Siempre correcto
        return $this->resultado($resultado, $correcto);
    }

    public function lanzamientoD(Request $request)
    {
        $eleccion = $request->input('eleccion');
        $resultado = ($eleccion == 'cara') ? 'cruz' : 'cara';
        $correcto = false; // Siempre incorrecto
        return $this->resultado($resultado, $correcto);
    }

    private function resultado($resultado, $correcto)
    {
        return response()->json(['resultado' => $resultado, 'correcto' => $correcto]);
    }
}
