@extends('layouts/app')
@section('content')

<div class="container">
  <h1>Hello boys!</h1>

  <br><br>
  <a href="{{ route ('movies.index') }}">Movies</a>
  <br><br>
  <a href="{{ route ('genres.index') }}">Genres</a>
  <br><br>
  <a href="{{ route ('directors.index') }}">Directors</a>
  <br><br>
  <a href="{{ route ('actors.index') }}">Actors</a>
</div>

@endsection
