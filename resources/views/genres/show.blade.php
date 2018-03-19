@extends('layouts.app')
@section('content')

<div class="container">

  <h1>Genre: {{ $genre->name }}</h1>

  @foreach ($genre->$movies as $movie)
    {{ $movie-titel}} <br> {{-- här står det titel eftersom alex skrev fel i databasen --}}
  @endforeach

</div>

@endsection
