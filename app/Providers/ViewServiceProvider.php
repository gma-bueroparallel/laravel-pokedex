<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\PokemonComposer;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('pages.home.main', PokemonComposer::class);
    }
}
