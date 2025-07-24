<?php

namespace App\Console\Commands;

use App\Importers\PokemonImporter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Importers\Helper\JsonExtractor;

class ImportData extends Command
{
    protected $signature = 'import:pokemons';
    protected $description = 'Imports Data from JSON into Database.';

    public function handle(): void
    {
        $this->importPokemons();
    }

    private function importPokemons(): void {
        $pokemonsFile = Storage::get('import/pokemons.json');
        $jsonData = json_decode($pokemonsFile, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            Log::error("Error decoding pokemons.json: " . json_last_error_msg());
            return;
        }

        $jsonExtractor = new JsonExtractor($jsonData);
        $pokemons = $jsonExtractor->getPokemons();

        if (empty($pokemons)) {
            Log::error("Missing or empty 'pokemons' data.");
            return;
        }

        $this->info("Starting to import Pokemons.");

        $pokemonImporter = new PokemonImporter();
        $pokemonImporter->importPokemonNames($pokemons);

        $this->info("Finished Importing Pokemons.");
    }
}
