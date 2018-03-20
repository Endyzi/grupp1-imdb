@extends('layouts.app')
@section('content')


<div class="container">
	<form method="POST" action="{{ route('actors.store') }}">
		@csrf  <!-- Skydd mot utanifrån kan skicka in data i vårt formulär -->

		<div class="form-group">
			<label for="actor">Actor</label>
			<input type="text" class="form-control" id="actor" name="actor" placeholder="Name">

		</div>

		<button type="submit" class="btn btn-primary">Add</button>
		<br><br>
		<a href="{{ route ('actors.index') }}" class="btn btn-success">Back</a>
	</form>
</div>
@endsection
