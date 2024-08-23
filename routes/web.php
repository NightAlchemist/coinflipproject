<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsentimientoController;
use App\Http\Controllers\SociodemograficoController;
use App\Http\Controllers\LanzamientoController;
use App\Http\Controllers\CuestionarioController;
use App\Http\Controllers\ProyectoController;

Route::middleware(['web'])->group(function () {
    Route::get('/', [ProyectoController::class, 'index']);
    Route::get('/consentimiento', [ConsentimientoController::class, 'showForm'])->name('consentimiento.show');
    Route::post('/consentimiento', [ConsentimientoController::class, 'store'])->name('consentimiento.store');
    Route::get('/sociodemografico', [SociodemograficoController::class, 'showForm'])->name('sociodemografico.show');
    Route::post('/sociodemografico', [SociodemograficoController::class, 'store'])->name('sociodemografico.store');
    Route::get('/instrucciones', [ProyectoController::class, 'instrucciones'])->name('instrucciones');
    Route::get('/preprueba', [ProyectoController::class, 'preprueba'])->name('preprueba');
    Route::get('/pre-lanzamiento-1', [ProyectoController::class, 'preLanzamiento1'])->name('pre_launch_1');
    Route::get('/pre-lanzamiento-2', [ProyectoController::class, 'preLanzamiento2'])->name('pre_launch_2');
    Route::get('/cuestionario_preprueba', [ProyectoController::class, 'cuestionarioPreprueba'])->name('cuestionario.preprueba');
    Route::get('/fin_preprueba', [ProyectoController::class, 'finPreprueba'])->name('fin_preprueba');
    Route::get('/prueba', [ProyectoController::class, 'prueba'])->name('prueba');
    Route::get('/final', [ProyectoController::class, 'final'])->name('final');

    Route::get('/serie-1/lanzamiento-1', [ProyectoController::class, 'serie_1_lanzamiento_1'])->name('serie_1_lanzamiento_1');
    Route::get('/serie-1/lanzamiento-2', [ProyectoController::class, 'serie_1_lanzamiento_2'])->name('serie_1_lanzamiento_2');
    Route::get('/serie-1/lanzamiento-3', [ProyectoController::class, 'serie_1_lanzamiento_3'])->name('serie_1_lanzamiento_3');
    Route::get('/serie-1/lanzamiento-4', [ProyectoController::class, 'serie_1_lanzamiento_4'])->name('serie_1_lanzamiento_4');
    Route::get('/serie-1/lanzamiento-5', [ProyectoController::class, 'serie_1_lanzamiento_5'])->name('serie_1_lanzamiento_5');
    Route::get('/serie-1/lanzamiento-6', [ProyectoController::class, 'serie_1_lanzamiento_6'])->name('serie_1_lanzamiento_6');
    Route::get('/cuestionario-serie-1', [ProyectoController::class, 'cuestionarioSerie1'])->name('cuestionario_serie_1');
    Route::post('/guardar-cuestionario-serie-1', [ProyectoController::class, 'guardarCuestionarioSerie1'])->name('guardar_cuestionario_serie_1');
    Route::post('/cuestionario', [CuestionarioController::class, 'store'])->name('cuestionario.store');

    // Rutas para Serie 2
    Route::get('/serie-2/lanzamiento-1', [ProyectoController::class, 'serie_2_lanzamiento_1'])->name('serie_2_lanzamiento_1');
    Route::get('/serie-2/lanzamiento-2', [ProyectoController::class, 'serie_2_lanzamiento_2'])->name('serie_2_lanzamiento_2');
    Route::get('/serie-2/lanzamiento-3', [ProyectoController::class, 'serie_2_lanzamiento_3'])->name('serie_2_lanzamiento_3');
    Route::get('/cuestionario-serie-2', [ProyectoController::class, 'cuestionarioSerie2'])->name('cuestionario_serie_2');
    Route::post('/guardar-cuestionario-serie-2', [ProyectoController::class, 'guardarCuestionarioSerie2'])->name('guardar_cuestionario_serie_2');

    // Rutas para Serie 3
    Route::get('/serie-3/lanzamiento-1', [ProyectoController::class, 'serie_3_lanzamiento_1'])->name('serie_3_lanzamiento_1');
    Route::get('/serie-3/lanzamiento-2', [ProyectoController::class, 'serie_3_lanzamiento_2'])->name('serie_3_lanzamiento_2');
    Route::get('/serie-3/lanzamiento-3', [ProyectoController::class, 'serie_3_lanzamiento_3'])->name('serie_3_lanzamiento_3');
    Route::get('/serie-3/lanzamiento-4', [ProyectoController::class, 'serie_3_lanzamiento_4'])->name('serie_3_lanzamiento_4');
    Route::get('/serie-3/lanzamiento-5', [ProyectoController::class, 'serie_3_lanzamiento_5'])->name('serie_3_lanzamiento_5');
    Route::get('/serie-3/lanzamiento-6', [ProyectoController::class, 'serie_3_lanzamiento_6'])->name('serie_3_lanzamiento_6');
    Route::get('/cuestionario-serie-3', [ProyectoController::class, 'cuestionarioSerie3'])->name('cuestionario_serie_3');
    Route::post('/guardar-cuestionario-serie-3', [ProyectoController::class, 'guardarCuestionarioSerie3'])->name('guardar_cuestionario_serie_3');

    // Rutas para Serie 4
    Route::get('/serie-4/lanzamiento-1', [ProyectoController::class, 'serie_4_lanzamiento_1'])->name('serie_4_lanzamiento_1');
    Route::get('/serie-4/lanzamiento-2', [ProyectoController::class, 'serie_4_lanzamiento_2'])->name('serie_4_lanzamiento_2');
    Route::get('/serie-4/lanzamiento-3', [ProyectoController::class, 'serie_4_lanzamiento_3'])->name('serie_4_lanzamiento_3');
    Route::get('/serie-4/lanzamiento-4', [ProyectoController::class, 'serie_4_lanzamiento_4'])->name('serie_4_lanzamiento_4');
    Route::get('/serie-4/lanzamiento-5', [ProyectoController::class, 'serie_4_lanzamiento_5'])->name('serie_4_lanzamiento_5');
    Route::get('/serie-4/lanzamiento-6', [ProyectoController::class, 'serie_4_lanzamiento_6'])->name('serie_4_lanzamiento_6');
    Route::get('/serie-4/lanzamiento-7', [ProyectoController::class, 'serie_4_lanzamiento_7'])->name('serie_4_lanzamiento_7');
    Route::get('/serie-4/lanzamiento-8', [ProyectoController::class, 'serie_4_lanzamiento_8'])->name('serie_4_lanzamiento_8');
    Route::get('/serie-4/lanzamiento-9', [ProyectoController::class, 'serie_4_lanzamiento_9'])->name('serie_4_lanzamiento_9');
    Route::get('/cuestionario-serie-4', [ProyectoController::class, 'cuestionarioSerie4'])->name('cuestionario_serie_4');
    Route::post('/guardar-cuestionario-serie-4', [ProyectoController::class, 'guardarCuestionarioSerie4'])->name('guardar_cuestionario_serie_4');

    // Rutas para Serie 5
    Route::get('/serie-5/lanzamiento-1', [ProyectoController::class, 'serie_5_lanzamiento_1'])->name('serie_5_lanzamiento_1');
    Route::get('/serie-5/lanzamiento-2', [ProyectoController::class, 'serie_5_lanzamiento_2'])->name('serie_5_lanzamiento_2');
    Route::get('/serie-5/lanzamiento-3', [ProyectoController::class, 'serie_5_lanzamiento_3'])->name('serie_5_lanzamiento_3');
    Route::get('/serie-5/lanzamiento-4', [ProyectoController::class, 'serie_5_lanzamiento_4'])->name('serie_5_lanzamiento_4');
    Route::get('/serie-5/lanzamiento-5', [ProyectoController::class, 'serie_5_lanzamiento_5'])->name('serie_5_lanzamiento_5');
    Route::get('/serie-5/lanzamiento-6', [ProyectoController::class, 'serie_5_lanzamiento_6'])->name('serie_5_lanzamiento_6');
    Route::get('/serie-5/lanzamiento-7', [ProyectoController::class, 'serie_5_lanzamiento_7'])->name('serie_5_lanzamiento_7');
    Route::get('/serie-5/lanzamiento-8', [ProyectoController::class, 'serie_5_lanzamiento_8'])->name('serie_5_lanzamiento_8');
    Route::get('/serie-5/lanzamiento-9', [ProyectoController::class, 'serie_5_lanzamiento_9'])->name('serie_5_lanzamiento_9');
    Route::get('/cuestionario-serie-5', [ProyectoController::class, 'cuestionarioSerie5'])->name('cuestionario_serie_5');
    Route::post('/guardar-cuestionario-serie-5', [ProyectoController::class, 'guardarCuestionarioSerie5'])->name('guardar_cuestionario_serie_5');

    // Rutas para Serie 6
    Route::get('/serie-6/lanzamiento-1', [ProyectoController::class, 'serie_6_lanzamiento_1'])->name('serie_6_lanzamiento_1');
    Route::get('/serie-6/lanzamiento-2', [ProyectoController::class, 'serie_6_lanzamiento_2'])->name('serie_6_lanzamiento_2');
    Route::get('/serie-6/lanzamiento-3', [ProyectoController::class, 'serie_6_lanzamiento_3'])->name('serie_6_lanzamiento_3');
    Route::get('/serie-6/lanzamiento-4', [ProyectoController::class, 'serie_6_lanzamiento_4'])->name('serie_6_lanzamiento_4');
    Route::get('/serie-6/lanzamiento-5', [ProyectoController::class, 'serie_6_lanzamiento_5'])->name('serie_6_lanzamiento_5');
    Route::get('/serie-6/lanzamiento-6', [ProyectoController::class, 'serie_6_lanzamiento_6'])->name('serie_6_lanzamiento_6');
    Route::get('/serie-6/lanzamiento-7', [ProyectoController::class, 'serie_6_lanzamiento_7'])->name('serie_6_lanzamiento_7');
    Route::get('/serie-6/lanzamiento-8', [ProyectoController::class, 'serie_6_lanzamiento_8'])->name('serie_6_lanzamiento_8');
    Route::get('/serie-6/lanzamiento-9', [ProyectoController::class, 'serie_6_lanzamiento_9'])->name('serie_6_lanzamiento_9');
    Route::get('/cuestionario-serie-6', [ProyectoController::class, 'cuestionarioSerie6'])->name('cuestionario_serie_6');
    Route::post('/guardar-cuestionario-serie-6', [ProyectoController::class, 'guardarCuestionarioSerie6'])->name('guardar_cuestionario_serie_6');

    // Rutas para Serie 7
    Route::get('/serie-7/lanzamiento-1', [ProyectoController::class, 'serie_7_lanzamiento_1'])->name('serie_7_lanzamiento_1');
    Route::get('/serie-7/lanzamiento-2', [ProyectoController::class, 'serie_7_lanzamiento_2'])->name('serie_7_lanzamiento_2');
    Route::get('/serie-7/lanzamiento-3', [ProyectoController::class, 'serie_7_lanzamiento_3'])->name('serie_7_lanzamiento_3');
    Route::get('/serie-7/lanzamiento-4', [ProyectoController::class, 'serie_7_lanzamiento_4'])->name('serie_7_lanzamiento_4');
    Route::get('/serie-7/lanzamiento-5', [ProyectoController::class, 'serie_7_lanzamiento_5'])->name('serie_7_lanzamiento_5');
    Route::get('/serie-7/lanzamiento-6', [ProyectoController::class, 'serie_7_lanzamiento_6'])->name('serie_7_lanzamiento_6');
    Route::get('/cuestionario-serie-7', [ProyectoController::class, 'cuestionarioSerie7'])->name('cuestionario_serie_7');
    Route::post('/guardar-cuestionario-serie-7', [ProyectoController::class, 'guardarCuestionarioSerie7'])->name('guardar_cuestionario_serie_7');

    // Rutas para Serie 8
    Route::get('/serie-8/lanzamiento-1', [ProyectoController::class, 'serie_8_lanzamiento_1'])->name('serie_8_lanzamiento_1');
    Route::get('/serie-8/lanzamiento-2', [ProyectoController::class, 'serie_8_lanzamiento_2'])->name('serie_8_lanzamiento_2');
    Route::get('/serie-8/lanzamiento-3', [ProyectoController::class, 'serie_8_lanzamiento_3'])->name('serie_8_lanzamiento_3');
    Route::get('/serie-8/lanzamiento-4', [ProyectoController::class, 'serie_8_lanzamiento_4'])->name('serie_8_lanzamiento_4');
    Route::get('/serie-8/lanzamiento-5', [ProyectoController::class, 'serie_8_lanzamiento_5'])->name('serie_8_lanzamiento_5');
    Route::get('/serie-8/lanzamiento-6', [ProyectoController::class, 'serie_8_lanzamiento_6'])->name('serie_8_lanzamiento_6');
    Route::get('/cuestionario-serie-8', [ProyectoController::class, 'cuestionarioSerie8'])->name('cuestionario_serie_8');
    Route::post('/guardar-cuestionario-serie-8', [ProyectoController::class, 'guardarCuestionarioSerie8'])->name('guardar_cuestionario_serie_8');

    // Rutas para Serie 9
    Route::get('/serie-9/lanzamiento-1', [ProyectoController::class, 'serie_9_lanzamiento_1'])->name('serie_9_lanzamiento_1');
    Route::get('/serie-9/lanzamiento-2', [ProyectoController::class, 'serie_9_lanzamiento_2'])->name('serie_9_lanzamiento_2');
    Route::get('/serie-9/lanzamiento-3', [ProyectoController::class, 'serie_9_lanzamiento_3'])->name('serie_9_lanzamiento_3');
    Route::get('/cuestionario-serie-9', [ProyectoController::class, 'cuestionarioSerie9'])->name('cuestionario_serie_9');
    Route::post('/guardar-cuestionario-serie-9', [ProyectoController::class, 'guardarCuestionarioSerie9'])->name('guardar_cuestionario_serie_9');

    // Rutas para Serie 10
    Route::get('/serie-10/lanzamiento-1', [ProyectoController::class, 'serie_10_lanzamiento_1'])->name('serie_10_lanzamiento_1');
    Route::get('/serie-10/lanzamiento-2', [ProyectoController::class, 'serie_10_lanzamiento_2'])->name('serie_10_lanzamiento_2');
    Route::get('/serie-10/lanzamiento-3', [ProyectoController::class, 'serie_10_lanzamiento_3'])->name('serie_10_lanzamiento_3');
    Route::get('/serie-10/lanzamiento-4', [ProyectoController::class, 'serie_10_lanzamiento_4'])->name('serie_10_lanzamiento_4');
    Route::get('/serie-10/lanzamiento-5', [ProyectoController::class, 'serie_10_lanzamiento_5'])->name('serie_10_lanzamiento_5');
    Route::get('/serie-10/lanzamiento-6', [ProyectoController::class, 'serie_10_lanzamiento_6'])->name('serie_10_lanzamiento_6');
    Route::get('/serie-10/lanzamiento-7', [ProyectoController::class, 'serie_10_lanzamiento_7'])->name('serie_10_lanzamiento_7');
    Route::get('/serie-10/lanzamiento-8', [ProyectoController::class, 'serie_10_lanzamiento_8'])->name('serie_10_lanzamiento_8');
    Route::get('/serie-10/lanzamiento-9', [ProyectoController::class, 'serie_10_lanzamiento_9'])->name('serie_10_lanzamiento_9');
    Route::get('/cuestionario-serie-10', [ProyectoController::class, 'cuestionarioSerie10'])->name('cuestionario_serie_10');
    Route::post('/guardar-cuestionario-serie-10', [ProyectoController::class, 'guardarCuestionarioSerie10'])->name('guardar_cuestionario_serie_10');

    // Rutas para Serie 11
    Route::get('/serie-11/lanzamiento-1', [ProyectoController::class, 'serie_11_lanzamiento_1'])->name('serie_11_lanzamiento_1');
    Route::get('/serie-11/lanzamiento-2', [ProyectoController::class, 'serie_11_lanzamiento_2'])->name('serie_11_lanzamiento_2');
    Route::get('/serie-11/lanzamiento-3', [ProyectoController::class, 'serie_11_lanzamiento_3'])->name('serie_11_lanzamiento_3');
    Route::get('/cuestionario-serie-11', [ProyectoController::class, 'cuestionarioSerie11'])->name('cuestionario_serie_11');
    Route::post('/guardar-cuestionario-serie-11', [ProyectoController::class, 'guardarCuestionarioSerie11'])->name('guardar_cuestionario_serie_11');

    // Rutas para Serie 11
    Route::get('/serie-12/lanzamiento-1', [ProyectoController::class, 'serie_12_lanzamiento_1'])->name('serie_12_lanzamiento_1');
    Route::get('/serie-12/lanzamiento-2', [ProyectoController::class, 'serie_12_lanzamiento_2'])->name('serie_12_lanzamiento_2');
    Route::get('/serie-12/lanzamiento-3', [ProyectoController::class, 'serie_12_lanzamiento_3'])->name('serie_12_lanzamiento_3');
    Route::get('/cuestionario-serie-12', [ProyectoController::class, 'cuestionarioSerie12'])->name('cuestionario_serie_12');
    Route::post('/guardar-cuestionario-serie-12', [ProyectoController::class, 'guardarCuestionarioSerie12'])->name('guardar_cuestionario_serie_12');

    // Ruta para la vista end_notice
    Route::get('/end-notice', [ProyectoController::class, 'endNotice'])->name('end_notice');

    // Ruta para la vista res_work y el guardado de datos
    Route::get('/res-work', [ProyectoController::class, 'resWork'])->name('res_work');
    Route::post('/guardar-res-work', [ProyectoController::class, 'guardarResWork'])->name('guardar_res_work');

    // Rutas para las vistas end y res_work
    Route::get('/end', [ProyectoController::class, 'end'])->name('end');  
});

Route::get('/verificar-sesion', function () {
    return response()->json(['consentimiento_id' => session('consentimiento_id')]);
});
