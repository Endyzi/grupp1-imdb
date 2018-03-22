@extends('layouts.app')
@section('content')

<div class="container">

<h1><?php echo $movie->titel; ?></h1>
<br>
		<div class="card-deck">
			<div class="card col-sm" style="flex-basis: 500px;">
			  <img class="card-img-top" src="<?php if(strlen($movie->cover_url) > 0) echo $movie->cover_url ?>" alt="{{ $movie->titel }} Cover">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo "Release Date: " . $movie->releasedate; if($movie->releasedate > date('Y-m-d')) {echo "(Upcomming)";} ?></h5>
			    <h2 class="card-text">{{ $movie->description }}</h2>
			  	<p class="card-text">{{ $movie->length }} min</p>

					<h3>Actors</h3>
					<ul>
						@foreach($movie->actors as $actor)
							<li>{{ $actor->name }}</li>
						@endforeach
					</ul>

					<h3>Genres</h3>
					<ul>
						@foreach($movie->genres as $genre)
							<li>{{ $genre->name }}</li>
						@endforeach
					</ul>


			  </div>
			</div>

		</div>
		<br>
			<a href="{{ route('movies.edit', ['movie' => $movie->id]) }}"><button type="button" class="btn btn-primary">Change</button></a>
		<br><br>
			<a href="{{ route ('movies.index') }}" class="btn btn-success">Back</a>


</div>

@endsection
