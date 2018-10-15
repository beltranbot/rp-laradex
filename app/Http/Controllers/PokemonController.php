<?php

namespace laradex\Http\Controllers;

use Illuminate\Http\Request;
use laradex\Pokemon;

class PokemonController extends Controller
{
    public function index (Request $request) {
        if ($request->ajax()) {
            $pokemon = Pokemon::all();
            return response()->json($pokemon, 200);
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
                "message" => "Pokemon creado correctamente!",
                "pokemon" => $pokemon
            ], 200);
        }
    }
}
