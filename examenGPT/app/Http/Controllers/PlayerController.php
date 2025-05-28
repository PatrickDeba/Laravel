<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('player.index', compact('players')); // nombre_carpeta.nombre_vista
    }
    public function show(Player $player)
    {
        $players = Player::all();
        return view('player.show', compact('player'));
    }
}
