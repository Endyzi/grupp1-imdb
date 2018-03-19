@extends('layouts.app')
@section('content')

<div clas="container">

<h1>Genrer:</h1>
	<ul>

		@foreach($directors as $director)
		<li><a href="{{ route('directors.show', ['director' => $director->id]) }}">{{ $director->name }}</a></li>

		@endforeach
	</ul>
	<a href="{{ route('directors.create') }}" class="btn btn-primary">Lägg till ny genre</a> {{-- btn btn-primary är en bootstrapklass för att färgsätta knappen till blå från grå --}}
</div>

@endsection
