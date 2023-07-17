@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <h1>
            Pastas
            <a href="{{ route('pastas.create') }}">+</a>
        </h1>
        <ul class="list-unstyled">
            @foreach ($pastas as $pasta)
                <li>
                    <a href="{{ route('pastas.show', $pasta -> id) }}">
                        {{ $pasta -> titolo }}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>

@endsection
