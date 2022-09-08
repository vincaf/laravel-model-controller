@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1 class="text-center p-3">WELCOME TO OUR MOVIE GALLERY</h1>
    </div>
    <img class="w-100" src="https://wallpaper.dog/large/20493501.jpg" alt="jumbo">
    <div class="d-flex justify-content-center">
        <a class="btn btn-success my-4" href="{{ route('movies') }}" role="button">CLICK HERE TO SEE THE MOVIES</a>
    </div>
@endsection