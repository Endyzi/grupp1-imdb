@extends('layouts.app')
@section('content')

<div class="container">

<h1>Genrer:</h1>
	<ul class="list-group">

		@foreach($genres as $genre)
		<li class="list-group-item mb-3"><a href="{{ route('genres.show', ['genre' => $genre->id]) }}">{{ $genre->name }}</a></li>

		@endforeach
	</ul>
	<a href="{{ route('genres.create') }}" class="btn btn-primary">Lägg till ny genre</a> {{-- btn btn-primary är en bootstrapklass för att färgsätta knappen till blå från grå --}}
	<br><br>
	<a href="{{ route ('home') }}" class="btn btn-success">Tillbaka</a>
</div>



@endsection
