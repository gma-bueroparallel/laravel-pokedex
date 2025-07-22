@extends('layouts.main')

@section('content')
    <div>
        <span>Pokemon</span>
        <x-pokemon-table :pokemonNames="$names" />
    </div>
@endsection

