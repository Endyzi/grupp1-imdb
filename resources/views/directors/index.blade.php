@extends('layouts.app')
@section('content')

<div class="container">

<h1>Directors</h1>
	<ul class="list-group">

		@foreach($directors as $director)
		<li class="list-group-item mb-3"><a href="{{ route('directors.show', ['director' => $director->id]) }}">{{ $director->name }}</a></li>

		@endforeach
	</ul>
	<a href="{{ route('directors.create') }}" class="btn btn-primary">Add new director</a> {{-- btn btn-primary är en bootstrapklass för att färgsätta knappen till blå från grå --}}
	<br><br>
	<a href="{{ route ('home') }}" class="btn btn-success">Back</a>
</div>

@endsection
