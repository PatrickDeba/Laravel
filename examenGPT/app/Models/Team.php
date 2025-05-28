<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Player;


class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
    ];
    public function player()
    {
        return $this->hasMany(Player::class); // Relacion 1:N
    }
}
