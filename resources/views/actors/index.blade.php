@extends('layouts.app')
@section('content')

<div class="container">

<h1>Actors</h1>
	<ul class="list-group">

		@foreach($actors as $actor)
		<li class="list-group-item mb-3"><a href="{{ route('actors.show', ['actor' => $actor->id]) }}">{{ $actor->name }}</a></li>

		@endforeach
	</ul>
	<a href="{{ route('actors.create') }}" class="btn btn-primary">Add new actor</a> {{-- btn btn-primary är en bootstrapklass för att färgsätta knappen till blå från grå --}}
	<br><br>
	<a href="{{ route ('home') }}" class="btn btn-success">Back</a>
</div>

@endsection
