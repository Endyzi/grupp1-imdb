@extends('layouts.app')
@section('content')


<div class="container">
	<form method="POST" action="{{ route('genres.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="genre">Genre</label>
			<input type="text" class="form-control" id="genre" name="genre" placeholder="Type of genre">

		</div>

		<button type="submit" class="btn btn-primary">Add</button>
		<br><br>
		<a href="{{ route ('genres.index') }}" class="btn btn-success">Back</a>
	</form>
</div>

@endsection
