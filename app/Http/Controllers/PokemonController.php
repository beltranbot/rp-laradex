<?php

namespace laradex\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index (Request $request) {
        if ($request->ajax()) {
            return response()->json([
                ['id' => 1, 'name' => 'Pikachu']
            ]);
        }
        return view('pokemon.index');
    }
}
