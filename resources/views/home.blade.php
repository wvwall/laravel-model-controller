@extends('layouts.app')

    @section('main')
      
        <div class="cards">
        @foreach ($movies as $movie)
            <div class="card">
                <h1>{{ $movie->title }}</h1>
                <h2>{{ $movie->original_title }}</h2>
                <h3>{{ $movie->nationality }}</h3>
                <h4>{{ $movie->date }}</h4>
                <h5>{{ $movie->vote }}</h5>
            </div>
        @endforeach
        </div>
      
    @endsection