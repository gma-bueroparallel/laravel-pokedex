<?php

namespace App\Http\Controllers;
use App\Models\Pokemon;

class PokemonController
{
    public function index()
    {
        $names = $this->getNames();

        return view('pages.home.main', [
            'names' => $names,
        ]);
    }

    private function getNames()
    {
        return Pokemon::pluck('name');
    }
}
