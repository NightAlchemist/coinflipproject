<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuestionario;
use App\Models\ResWork;

class ProyectoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function instrucciones()
    {
        return view('instrucciones');
    }

    public function preprueba()
    {
        return view('pre_test');
    }

    public function preLanzamiento1()
    {
        return view('pre_launch_1');
    }

    public function preLanzamiento2()
    {
        return view('pre_launch_2');
    }

    public function cuestionarioPreprueba()
    {
        return view('cuestionario_preprueba');
    }

    public function finPreprueba()
    {
        return view('fin_preprueba');
    }

    public function serie_1_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_1_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_1_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_1_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_1_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_1_lanzamiento_3', compact('consentimiento_id'));
    }

    public function serie_1_lanzamiento_4(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_1_lanzamiento_4', compact('consentimiento_id'));
    }

    public function serie_1_lanzamiento_5(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_1_lanzamiento_5', compact('consentimiento_id'));
    }

    public function serie_1_lanzamiento_6(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_1_lanzamiento_6', compact('consentimiento_id'));
    }

    public function cuestionarioSerie1()
    {
        $aciertos = 0; // No hay base de datos para contar los aciertos, ponemos 0 por defecto
        $totalLanzamientos = 6; // Siempre habrá 6 lanzamientos en la serie

        return view('cuestionarios.cuestionario_serie_1', compact('aciertos', 'totalLanzamientos'));
    }

    public function guardarCuestionarioSerie1(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 1,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('serie_2_lanzamiento_1'); // Ajusta la ruta según sea necesario
    }

    // Métodos para Serie 2
    public function serie_2_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_2_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_2_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_2_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_2_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_2_lanzamiento_3', compact('consentimiento_id'));
    }

    public function cuestionarioSerie2()
    {
        return view('cuestionarios.cuestionario_serie_2');
    }

    public function guardarCuestionarioSerie2(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 2,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('serie_3_lanzamiento_1'); // Ajusta la ruta según sea necesario
    }

    // Métodos para Serie 3
    public function serie_3_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_3_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_3_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_3_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_3_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_3_lanzamiento_3', compact('consentimiento_id'));
    }

    public function serie_3_lanzamiento_4(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_3_lanzamiento_4', compact('consentimiento_id'));
    }

    public function serie_3_lanzamiento_5(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_3_lanzamiento_5', compact('consentimiento_id'));
    }

    public function serie_3_lanzamiento_6(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_3_lanzamiento_6', compact('consentimiento_id'));
    }

    public function cuestionarioSerie3()
    {
        return view('cuestionarios.cuestionario_serie_3');
    }

    public function guardarCuestionarioSerie3(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 3,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('serie_4_lanzamiento_1'); // Ajusta la ruta según sea necesario
    }

    // Métodos para Serie 4
    public function serie_4_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_4_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_4_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_4_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_4_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_4_lanzamiento_3', compact('consentimiento_id'));
    }

    public function serie_4_lanzamiento_4(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_4_lanzamiento_4', compact('consentimiento_id'));
    }

    public function serie_4_lanzamiento_5(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_4_lanzamiento_5', compact('consentimiento_id'));
    }

    public function serie_4_lanzamiento_6(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_4_lanzamiento_6', compact('consentimiento_id'));
    }

    public function cuestionarioSerie4()
    {
        return view('cuestionarios.cuestionario_serie_4');
    }

    public function guardarCuestionarioSerie4(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 4,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('serie_5_lanzamiento_1'); // Ajusta la ruta según sea necesario
    }

    // Métodos para Serie 5
    public function serie_5_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_5_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_5_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_5_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_5_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_5_lanzamiento_3', compact('consentimiento_id'));
    }

    public function serie_5_lanzamiento_4(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_5_lanzamiento_4', compact('consentimiento_id'));
    }

    public function serie_5_lanzamiento_5(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_5_lanzamiento_5', compact('consentimiento_id'));
    }

    public function serie_5_lanzamiento_6(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_5_lanzamiento_6', compact('consentimiento_id'));
    }

    public function cuestionarioSerie5()
    {
        return view('cuestionarios.cuestionario_serie_5');
    }

    public function guardarCuestionarioSerie5(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 5,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('serie_6_lanzamiento_1'); // Ajusta la ruta según sea necesario
    }

    // Métodos para Serie 6
    public function serie_6_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_6_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_6_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_6_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_6_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_6_lanzamiento_3', compact('consentimiento_id'));
    }

    public function cuestionarioSerie6()
    {
        return view('cuestionarios.cuestionario_serie_6');
    }

    public function guardarCuestionarioSerie6(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 6,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('serie_7_lanzamiento_1'); // Ajusta la ruta según sea necesario
    }

    // Métodos para Serie 7
    public function serie_7_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_7_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_7_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_7_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_7_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_7_lanzamiento_3', compact('consentimiento_id'));
    }

    public function cuestionarioSerie7()
    {
        return view('cuestionarios.cuestionario_serie_7');
    }

    public function guardarCuestionarioSerie7(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 7,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('serie_8_lanzamiento_1'); // Ajusta la ruta según sea necesario
    }

    // Métodos para Serie 8
    public function serie_8_lanzamiento_1(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_8_lanzamiento_1', compact('consentimiento_id'));
    }

    public function serie_8_lanzamiento_2(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_8_lanzamiento_2', compact('consentimiento_id'));
    }

    public function serie_8_lanzamiento_3(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('lanzamientos.serie_8_lanzamiento_3', compact('consentimiento_id'));
    }

    public function cuestionarioSerie8()
    {
        return view('cuestionarios.cuestionario_serie_8');
    }

    public function guardarCuestionarioSerie8(Request $request)
    {
        $validated = $request->validate([
            'prediccion' => 'required',
            'nivel_confianza' => 'required|integer|min:1|max:7',
            'razonamiento' => 'required|string',
        ]);

        // Guardar las respuestas del cuestionario en la base de datos
        Cuestionario::create([
            'consentimiento_id' => session('consentimiento_id'),
            'serie' => 8,
            'prediccion' => $validated['prediccion'],
            'nivel_confianza' => $validated['nivel_confianza'],
            'razonamiento' => $validated['razonamiento'],
        ]);

        // Redirigir a la siguiente serie o vista deseada
        return redirect()->route('end_notice'); // Ajusta la ruta según sea necesario
    }

    // Métodos para end_notice, end y res_work
    public function endNotice(Request $request)
    {
        $consentimiento_id = $request->session()->get('consentimiento_id');
        return view('end_notice', compact('consentimiento_id'));
    }

    public function end()
    {
        return view('end');
    }

    // Métodos para res_work
    public function resWork()
    {
        return view('res_work');
    }

    public function guardarResWork(Request $request)
    {
        $validated = $request->validate([
            'interes_resultados' => 'required',
            'inscripcion_taller' => 'required',
            'correo' => 'required|email',
        ]);

        // Guardar las respuestas en la base de datos
        ResWork::create([
            'interes_resultados' => $validated['interes_resultados'],
            'inscripcion_taller' => $validated['inscripcion_taller'],
            'correo' => $validated['correo'],
        ]);

        // Redirigir a la vista de fin
        return redirect()->route('end');
    }


    public function prueba()
    {
        return view('prueba');
    }

    public function final()
    {
        return view('final');
    }
}
