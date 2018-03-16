@extends('layouts.app')
@section('content')


<div clas="container">


	<h1>Genrer:</h1>


	<ul>
		@foreach($genres as $genre)
		<li><a href="{{ route('genres.show', ['genre' => $genre->id]) }}">{{ $genre->name }}</a></li>
		@endforeach
	</ul>
</div>
@endsection