# Set up the project

1. `git clone git@github.com:gma-bueroparallel/laravel-pokedex.git`
2. `ddev start`
3. `ddev composer install`
4. `ddev php artisan key:generate`
5. `ddev php artisan migrate`
6. Create the data file in: `storage/app/private/import/pokemons.json`
7. Fill the data e.g.:

    ```json
    {
        "pokemons": [
            {
                "name": "Pikachu",
                "level": 10
            },
            {
                "name": "Meowth",
                "level": 20
            },
            {
                "name": "Psyduck",
                "level": 10
            },
            {
                "name": "Gengar",
                "level": 20
            }
        ]
    }
    ```

8. Import the data: `ddev php artisan import:pokemons`
9. `ddev npm install`
10. `ddev npm run build`
11. `ddev npm dev`
