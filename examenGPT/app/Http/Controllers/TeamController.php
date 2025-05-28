<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('team.index', compact('teams')); // nombre_carpeta.nombre_vista
    }
    public function add()
    {
        return view('team.add');
    }
    public function store(Request $request)
    {
        $author = new Team();
        $author->name = $request->input('name');
        $author->city = $request->input('city');
        $author->save();

        return redirect()->route('IndexTeam')->with('success', 'Team creado exitosamente.');
    }
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('IndexTeam')->with('success', 'Team eliminado correctamente.');
    }
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', compact('team'));
    }
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->name = $request->input('name');
        $team->city = $request->input('city');
        $team->save();

        return redirect()->route('IndexTeam')->with('success', 'Team actualizado correctamente.');
    }
}
