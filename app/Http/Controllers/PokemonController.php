<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class PokemonController
{
    public function index()
    {
        $level = request('level');
        $query = Pokemon::query();

        if ($level) {
            $query->where('level', $level);
        }

        $pokemons = $query->orderBy('name')->get();

        return view('pages.home.main', [
            'pokemons' => $pokemons,
            'selectedLevel' => $level,
        ]);
    }
}
