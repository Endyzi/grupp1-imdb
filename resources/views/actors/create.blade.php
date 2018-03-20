@extends('layouts.app')
@section('content')


<div clas="container">
	<form method="POST" action="{{ route('movies.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="actor">Actor</label>
			<input type="text" class="form-control" id="actor" name="actor" placeholder="Lägg Till Film namn">
			<label for="actor">Biography</label>
			<input type="text" class="form-control" id="description" name="description" placeholder="Lägg Till beskrivning">
			<label for="movie">Film Releasedate</label>
			<input type="date" class="form-control" id="releasedate" name="releasedate" placeholder="Lägg Till releasedate">
			<label for="movie">Film Längd</label>
			<input type="text" class="form-control" id="length" name="length" placeholder="Lägg Till Film-längd">
			<label for="movie">Director</label>
			<select class="form-control" id="director" name="director" placeholder="Lägg Till Director">
				@foreach ($directors as $director)
    			<option value="{{ $director->id }}">{{ $director->name }}</option>
				@endforeach
			</select>
			<label for="actor">Actors</label>
			<select class="form-control" id="actor" name="actor[]" multiple placeholder="Lägg Till Actor">
				@foreach ($genres as $genre)
    			<option value="{{ $actor->id }}">{{ $actor->name }}</option>
				@endforeach
			</select>

		</div>

		<button type="submit" class="btn btn-primary">Lägg till</button>
	</form>
</div>

@endsection 
