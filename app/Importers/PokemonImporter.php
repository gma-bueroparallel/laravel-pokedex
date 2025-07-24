<?php

namespace App\Importers;

use App\Models\Pokemon;

class PokemonImporter
{
    public function importPokemonNames($pokemon): void
    {
        foreach ($pokemon as $data) {
            $name = $data['name'];
            $level = $data['level'];

            $this->importPokemonIfNotExists($name, $level);
        }
    }

    private function importPokemonIfNotExists($name, $level): void {
        Pokemon::updateOrCreate(
            ['name' => $name],
            ['level' => $level]
        );
    }
}
