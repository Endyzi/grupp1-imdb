@extends('layouts.app')
@section('content')

<div clas="container">

<h1><?php echo $movie->titel; ?></h1>
		<div class="row">
			<div class="card col-sm" style="width: 18rem;">
			  <img class="card-img-top" src="<?php if(strlen($movie->cover_url) > 0) echo $movie->cover_url ?>" alt="{{ $movie->titel }} Cover">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo "Release Date: " . $movie->releasedate; if($movie->releasedate > date('Y-m-d')) {echo "(Upcomming)";} ?></h5>
			    <p class="card-text">{{ $movie->description }}</p>
			  </div>
			</div>

		</div>
	<a href="{{ route ('movies.index') }}" class="btn btn-success">Tillbaka</a>


</div>

@endsection