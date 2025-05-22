<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'email', 'telefono', 'imagen'];
    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}
