<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;

    protected $fillable = ['consentimiento_id', 'serie', 'prediccion', 'nivel_confianza', 'razonamiento'];

    // Definir la relación con Consentimiento
    public function consentimiento()
    {
        return $this->belongsTo(Consentimiento::class);
    }
}
