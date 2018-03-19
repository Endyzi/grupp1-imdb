@extends('layouts.app')
@section('content')

<div clas="container">

<h1>Genrer:</h1>
	<ul>

		@foreach($genres as $genre)
		<li><a href="{{ route('genres.show', ['genre' => $genre->id]) }}">{{ $genre->name }}</a></li>

		@endforeach
	</ul>
	<a href="{{ route('genres.create') }}" class="btn btn-primary">Lägg till ny genre</a> {{-- btn btn-primary är en bootstrapklass för att färgsätta knappen till blå från grå --}}
</div>

@endsection
