@extends('layouts.app')
@section('content')
<div class="container">
	<h2>HELLO</h2>
    <form method="POST" action="{{ route('directors.update', ['director' => $director->id]) }}">
      @csrf
      <div class="form-group">
        <label for="genre">Director namn</label>
        <input type="text" class="form-control" id="director" name="director" value="{{ $director->name }}" placeholder="editera director">
      </div>
      <button type="submit" class="btn btn-secondary">Ändra</button>
    </form>
</div>

@endsection