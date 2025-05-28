<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Team;



class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'team_id',
        'imagen',
    ];
    public function team()
    {
        return $this->belongsTo(Team::class); // Relacion N:1
    }
}
