@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <h1>
            NEW PASTA
        </h1>
        <form method="POST" action="{{ route('pastas.store') }}">

            @csrf

            <label for="src">SRC</label>
            <br>
            <input type="text" name="src">
            <br>

            <label for="titolo">Titolo</label>
            <br>
            <input type="text" name="titolo">
            <br>

            <label for="tipo">Tipo</label>
            <br>
            <input type="text" name="tipo">
            <br>

            <label for="cottura">Cottura</label>
            <br>
            <input type="text" name="cottura">
            <br>

            <label for="peso">Peso</label>
            <br>
            <input type="text" name="peso">
            <br>

            <label for="descrizione">Descrizione</label>
            <br>
            <input type="text" name="descrizione">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>

@endsection
