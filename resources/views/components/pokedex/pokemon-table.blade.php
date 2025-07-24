<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Level</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($pokemons as $pokemon)
        <tr>
            <td>{{ $pokemon->name }}</td>
            <td>{{ $pokemon->level }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
