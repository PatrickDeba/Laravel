<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curso extends Model
{
    use HasFactory;
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
}
