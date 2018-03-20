@extends('layouts.app')
@section('content')

<div clas="container">

<h1>Movies:</h1>
	<ul>

		@foreach($movies as $movie)
		<li><a href="{{ route('movies.show', ['movie' => $movie->id]) }}">{{ $movie->titel }}</a></li>

		@endforeach
	</ul>
	<a href="{{ route('movies.create') }}" class="btn btn-primary">Lägg till ny film</a> {{-- btn btn-primary är en bootstrapklass för att färgsätta knappen till blå från grå --}}
</div>

@endsection