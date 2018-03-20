@extends('layouts.app')
@section('content')

<div class="container">

<h1>Movies</h1>
<br>
		<div class="card-deck">
		@foreach($movies as $movie)
		<div class="card col-sm" style="width: 18re;">
		  <img class="card-img-top" src="<?php if(strlen($movie->cover_url) > 0) echo $movie->cover_url ?>" alt="{{ $movie->titel }} Cover">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $movie->titel . " <br><br> " . $movie->releasedate; if($movie->releasedate > date('Y-m-d')) {echo "(Upcomming)";} ?></h5>
		    <p class="card-text">{{ $movie->description }}</p>
		    <a class="btn btn-primary" href="{{ route('movies.show', ['movie' => $movie->id]) }}">More Info</a>
		  </div>
		</div>

		@endforeach
		</div>
	<br><br>
	<a href="{{ route('movies.create') }}" class="btn btn-primary">Add new movie</a> {{-- btn btn-primary är en bootstrapklass för att färgsätta knappen till blå från grå --}}
  <br><br>
  <a href="{{ route ('home') }}" class="btn btn-success">Back</a>
</div>

@endsection
