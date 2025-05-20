<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_curso', 'profesor_id'];

    // Relación uno a muchos (inversa) a profesores
    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    // Relación muchos a muchos con alumnos
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_curso'); // Tabla pivote: alumno_curso
    }
}