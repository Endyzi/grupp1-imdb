@extends('layouts.app')
@section('content')


<div clas="container">
	<form method="POST" action="{{ route('movies.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="movie">Film Namn</label>
			<input type="text" class="form-control" id="movie" name="movie" placeholder="Lägg Till Film namn">
			<label for="movie">Film Beskrivning</label>
			<input type="text" class="form-control" id="description" name="description" placeholder="Lägg Till beskrivning">
			<label for="movie">Film Releasedate</label>
			<input type="date" class="form-control" id="releasedate" name="releasedate" placeholder="Lägg Till releasedate">
			<label for="movie">Film Längd</label>
			<input type="text" class="form-control" id="length" name="length" placeholder="Lägg Till Film-längd">
			<label for="movie">Film Cover Url</label>
			<input type="text" class="form-control" id="cover_url" name="cover_url" placeholder="Lägg Till Cover-Url">
			<label for="movie">Director</label>
			<select class="form-control" id="director" name="director" placeholder="Lägg Till Director">
				@foreach ($directors as $director)
    			<option value="{{ $director->id }}">{{ $director->name }}</option>
				@endforeach
			</select>
			<label for="movie">Genres</label>
			<select class="form-control" id="genre" name="genre[]" multiple placeholder="Lägg Till Genre">
				@foreach ($genres as $genre)
    			<option value="{{ $genre->id }}">{{ $genre->name }}</option>
				@endforeach
			</select>

		</div>

		<button type="submit" class="btn btn-primary">Lägg till</button>
	</form>
</div>

@endsection 
