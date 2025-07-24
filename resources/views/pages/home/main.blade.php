@extends('layouts.main')

@section('content')
    <div>
        <h3>Pokemon</h3>

        <form class="filter" method="GET" action="{{ route('home') }}">
            <select name="level" onchange="this.form.submit()">
                <option value="">Alle Level</option>
                @foreach ($levels as $level)
                    <option value="{{ $level }}" @selected($selectedLevel == $level)>{{ $level }}</option>
                @endforeach
            </select>
        </form>

        <x-pokedex.pokemon-table :pokemons="$pokemons" />
    </div>
@endsection
