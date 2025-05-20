<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_ape', 'edad', 'telefono', 'direccion'];

    // Relación muchos a muchos con cursos
    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'alumno_curso'); // Tabla pivote: alumno_curso
    }
}