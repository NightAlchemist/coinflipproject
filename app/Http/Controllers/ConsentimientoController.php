<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consentimiento;

class ConsentimientoController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres_y_apellidos' => 'required|string|max:255',
            'acepta' => 'required|in:si,no',
        ]);

        $consentimiento = Consentimiento::create([
            'nombres_y_apellidos' => $request->input('nombres_y_apellidos'),
            'acepta' => $request->input('acepta'),
        ]);

        // Guardar el consentimiento_id en la sesión
        session(['consentimiento_id' => $consentimiento->id]);

        return redirect()->route('sociodemografico.show'); // Redirigir a la siguiente página
    }
}
