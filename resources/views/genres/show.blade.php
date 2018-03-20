@extends('layouts.app')
@section('content')

<div class="container">
  <h1>{{ $genre->name }}</h1>
  <a href="{{ route('genres.edit', ['genre' => $genre->id]) }}"><button type="button" class="btn btn-primary">Ändra namn</button></a>
</div>

@endsection
