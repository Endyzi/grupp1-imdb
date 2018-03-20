@extends('layouts.app')
@section('content')


<div class="container">
	<form method="POST" action="{{ route('directors.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="genre">Director</label>
			<input type="text" class="form-control" id="director" name="director" placeholder="Name">

		</div>

		<button type="submit" class="btn btn-primary">Add</button>
		<br><br>
		<a href="{{ route ('directors.index') }}" class="btn btn-success">Back</a>
	</form>
</div>

@endsection
