@extends('layouts.app')
@section('content')


<div clas="container">
	<form>
		<div class="form-group">
			<label for="genre">Genrenamn</label>
			<input type="text" class="form-control" id="genre" namn="genre" placeholder="Lägg till genre">

		</div>

		<button type="submit" class="btn btn-primary">Lägg till</button>
	</form>
</div>

@endsection 
