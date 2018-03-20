@extends('layouts.app')
@section('content')

<div class="container">
  <h1>{{ $genre->name }}</h1>
  <br>
  <a href="{{ route('genres.edit', ['genre' => $genre->id]) }}"><button type="button" class="btn btn-primary">Change</button></a>
    <br><br>
      <a href="{{ route ('genres.index') }}" class="btn btn-success">Back</a>
</div>

@endsection
