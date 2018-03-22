@extends('layouts.app')
@section('content')

<div class="container">
  <h1>{{ $director->name }}</h1>
    <a href="{{ route('directors.edit', ['director' => $director->id]) }}"><button type="button" class="btn btn-primary">Change</button></a>

    <h3>Directed movies</h3>
    <ul>
      @foreach($director->movies as $movie)
        <li>{{ $movie->titel }}</li>
      @endforeach
    </ul>

</div>

@endsection
