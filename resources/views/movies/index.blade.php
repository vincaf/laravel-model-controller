@extends('layouts.main')

@section('main-content')
    <div class="d-flex flex-wrap justify-content-center">
        @forelse ($movies as $movie)
            @include('partials.movieCard', ['movie' => $movie])
        @empty
            <div class="w-100 text-center">Nessun film disponibile</div>
        @endforelse
    </div>
@endsection
