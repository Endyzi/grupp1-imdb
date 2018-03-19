@extends('layouts/app')

@section('content')
  <h1>Hello boys!</h1>

  <br><br>
  <a href="{{ route ('movies.index') }}">Movies</a>
  <br><br>
  <a href="{{ route ('genres.index') }}">Genres</a>
@endsection
