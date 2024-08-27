<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'interes_resultados',
        'inscripcion_taller',
        'correo',
    ];
}
