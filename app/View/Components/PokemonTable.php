<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class PokemonTable extends Component
{
    public Collection $pokemons;

    public function __construct($pokemons)
    {
        $this->pokemons = $pokemons;
    }

    public function render()
    {
        return view('components.pokedex.pokemon-table', [
            'pokemons' => $this->pokemons,
        ]);
    }
}
