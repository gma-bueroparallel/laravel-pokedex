<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PokemonTable extends Component
{
    public mixed $pokemonNames;

    public function __construct($pokemonNames)
    {
        $this->pokemonNames = $pokemonNames;
    }

    public function render(): View|Closure|string
    {
        return view(
            'components.pokedex.pokemon-table',
            [
                'pokemonNames' => $this->pokemonNames,
            ]
        );
    }
}
