@extends('layouts.app')
@section('content')
<?php //dump($movies); exit(); ?>
<div class="container">
<h1 class="mb-4"> {{ $user->name }} </h1>

<h3>Votes</h3>
<ul>
	@foreach($user->ratings as $rating)
		<li><a href="{{ route('movies.show', ['movie' => $rating->movie->id]) }}">{{ $rating->movie->titel }}</a>: {{ $rating->rating }}/5</li>
	@endforeach
</ul>
</div>
@endsection
