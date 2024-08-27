<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sociodemografico;

class SociodemograficoController extends Controller
{
    public function showForm()
    {
        return view('sociodemografico');
    }

    public function store(Request $request)
    {
        $request->validate([
            'edad' => 'required|integer',
            'genero' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'nivel_academico' => 'required|string|max:255',
            'ingresos' => 'required|numeric',
        ]);

        $data = $request->all();
        $data['consentimiento_id'] = session('consentimiento_id');

        Sociodemografico::create($data);

        return redirect('/instrucciones');
    }
}
