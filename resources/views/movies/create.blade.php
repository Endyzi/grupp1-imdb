@extends('layouts.app')
@section('content')


<div class="container">
	<form method="POST" action="{{ route('movies.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="movie">Titel</label>
			<input type="text" class="form-control" id="movie" name="movie" placeholder="Title">
			<label for="movie">Description</label>
			<input type="text" class="form-control" id="description" name="description" placeholder="Description">
			<label for="movie">Release Date</label>
			<input type="date" class="form-control" id="releasedate" name="releasedate" placeholder="Releasedate">
			<label for="movie">Length</label>
			<input type="text" class="form-control" id="length" name="length" placeholder="Length">
			<label for="movie">Cover Url</label>
			<input type="text" class="form-control" id="cover_url" name="cover_url" placeholder="Add Cover-Url">
			
			<label for="movie">Director</label>
			<select class="form-control" id="director" name="director" placeholder="Director">
				@foreach ($directors as $director)
    			<option value="{{ $director->id }}">{{ $director->name }}</option>
				@endforeach
			</select>
			<label for="movie">Genres</label>
			<select class="form-control" id="genre" name="genre[]" multiple placeholder="Add Genre">
				@foreach ($genres as $genre)
    			<option value="{{ $genre->id }}">{{ $genre->name }}</option>
				@endforeach
			</select>

		</div>

		<button type="submit" class="btn btn-primary">Add</button>
		<br><br>
		<a href="{{ route ('movies.index') }}" class="btn btn-success">Back</a>
	</form>
</div>

@endsection
