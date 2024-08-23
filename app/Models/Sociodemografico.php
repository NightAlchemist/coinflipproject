<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sociodemografico extends Model
{
    use HasFactory;

    protected $fillable = ['consentimiento_id', 'edad', 'genero', 'pais', 'religion', 'nivel_academico', 'ingresos'];

    // Definir la relación con Consentimiento
    public function consentimiento()
    {
        return $this->belongsTo(Consentimiento::class);
    }
}
