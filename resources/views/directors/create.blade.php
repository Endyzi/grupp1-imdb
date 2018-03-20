@extends('layouts.app')
@section('content')


<div class="container">
	<form method="POST" action="{{ route('directors.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="genre">Director namn</label>
			<input type="text" class="form-control" id="director" name="director" placeholder="Lägg till director">

		</div>

		<button type="submit" class="btn btn-primary">Lägg till</button>
	</form>
</div>

@endsection
