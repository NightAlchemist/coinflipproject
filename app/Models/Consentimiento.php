<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consentimiento extends Model
{
    use HasFactory;

    protected $fillable = ['nombres_y_apellidos', 'acepta'];  // Permitir la asignación masiva para estos campos

    // Definir la relación con Sociodemografico
    public function sociodemografico()
    {
        return $this->hasOne(Sociodemografico::class);
    }

    // Definir la relación con Lanzamientos
    public function lanzamientos()
    {
        return $this->hasMany(Lanzamiento::class);
    }

    // Si los consentimientos están relacionados con los usuarios (si decides usar User en el futuro)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

