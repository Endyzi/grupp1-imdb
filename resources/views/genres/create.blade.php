@extends('layouts.app')
@section('content')


<div class="container">
	<form method="POST" action="{{ route('genres.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="genre">Genre namn</label>
			<input type="text" class="form-control" id="genre" name="genre" placeholder="Lägg till genre">

		</div>

		<button type="submit" class="btn btn-primary">Lägg till</button>
	</form>
</div>

@endsection
