<?php

namespace App\Importers;

use App\Models\Pokemon;

class PokemonImporter
{
    public function importPokemonNames($pokemon): void
    {
        foreach ($pokemon as $data) {
            $name = $data['name'];

            $this->importPokemonIfNotExists($name);
        }
    }

    private function importPokemonIfNotExists($name): void {
        Pokemon::firstOrCreate(['name' => $name]);
    }
}
