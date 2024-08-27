<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuestionario;

class CuestionarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'respuesta' => 'required|string',
        ]);

        Cuestionario::create($request->all());

        return response()->json(['message' => 'Cuestionario guardado correctamente']);
    }
}