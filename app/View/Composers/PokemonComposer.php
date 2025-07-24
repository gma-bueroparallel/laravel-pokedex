<?php

namespace App\View\Composers;

use App\Models\Pokemon;
use Illuminate\View\View;

class PokemonComposer
{
    public function compose(View $view): void
    {
        $levels = Pokemon::select('level')
            ->distinct()
            ->orderBy('level')
            ->pluck('level');

        $view->with('levels', $levels);
    }
}
