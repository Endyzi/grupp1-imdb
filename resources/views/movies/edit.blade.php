@extends('layouts.app')
@section('content')

<div clas="container">

	<form method="POST" action="{{ route('movies.update', ['movie' => $movie->id]) }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="movie">Film Namn</label>
				<input type="text" class="form-control" id="movie" name="movie" value="{{ $movie->titel }}" placeholder="Lägg Till Film namn">
			<label for="movie">Film Beskrivning</label>
				<input type="text" class="form-control" id="description" value="{{ $movie->description }}" name="description" placeholder="Lägg Till beskrivning">
			<label for="movie">Film Releasedate</label>
				<input type="date" class="form-control" id="releasedate" value="{{ $movie->releasedate }}" name="releasedate" placeholder="Lägg Till releasedate">
			<label for="movie">Film Längd</label>
				<input type="text" class="form-control" id="length" name="length" value="{{ $movie->length }}" placeholder="Lägg Till Film-längd">
			<label for="movie">Film Cover Url</label>
				<input type="text" class="form-control" id="cover_url" name="cover_url" value="{{ $movie->cover_url }}" placeholder="Lägg Till Cover-Url">
			<label for="movie">Director</label>

			<select class="form-control" id="director" name="director" placeholder="Lägg Till Director">
			@foreach ($directors as $director)
				@if($movie->director->id == $director->id)
					<option selected value="{{ $movie->director->id }}">{{ $movie->director->name }}</option>
				@else
	    			<option value="{{ $director->id }}">{{ $director->name }}</option>
	    		@endif
    		@endforeach
			</select>

			<label for="movie">Genres</label>
				<select class="form-control" id="genre" name="genres[]" multiple placeholder="Lägg Till Genre">
					@foreach ($genres as $genre)
						@if($movie->genres->contains($genre->id))
							<option selected value="{{ $genre->id }}">{{ $genre->name }}</option>
						@else
	    				<option value="{{ $genre->id }}">{{ $genre->name }}</option>
	    			@endif
					@endforeach
			</select>

			<label for="movie">Actors</label>
				<select class="form-control" id="actor" name="actors[]" multiple placeholder="Lägg Till Actor">
					@foreach ($actors as $actor)
						@if($movie->actors->contains($actor->id))
							<option selected value="{{ $actor->id }}">{{ $actor->name }}</option>
						@else
	    				<option value="{{ $actor->id }}">{{ $actor->name }}</option>
	    		@endif
				@endforeach
			</select>

		</div>

		<button type="submit" class="btn btn-primary">Change</button>
	</form>
</div>

@endsection
