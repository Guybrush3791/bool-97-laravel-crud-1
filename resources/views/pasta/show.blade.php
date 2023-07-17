@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <h1>{{ $pasta -> titolo }}</h1>
        <img src="{{ $pasta -> src }}">
        <div class="row justify-content-between py-4">
            <span class="col">{{ $pasta -> tipo }}</span>
            <span class="col">{{ $pasta -> cottura }}</span>
            <span class="col">{{ $pasta -> peso }}</span>
        </div>
        <p class="px-5">
            {{ $pasta -> descrizione }}
        </p>
    </div>

@endsection
