<?php

namespace laradex\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index (Request $request) {
        if ($request->ajax()) {
            return response()->json([
                ['id' => 1, 'name' => 'Pikachu']
            ], 200);
        }
        return view('pokemon.index');
    }

    public function store (Request $request) {
        if ($request->ajax()) {
            $pokemon = new Pokemon();
            $pokemon->name = $request->name;
            $pokemon->picture = $request->picture;

            $pokemon->save();

            return response()->json([
                "message" => "Pokemon creado correctamente!"
            ], 200);
        }
    }
}
