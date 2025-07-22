<?php

namespace App\Importers\Helper;

class JsonExtractor
{
    private array $jsonData;

    public function __construct(array $jsonData)
    {
        $this->jsonData = $jsonData;
    }

    public function getPokemons(): array
    {
        $pokemons = [];

        foreach ($this->jsonData['pokemons'] as $pokemon) {
            $name = $pokemon['name'];

            $pokemons[] = [
                'name' => $name,
            ];
        }

        return $pokemons;
    }
}

