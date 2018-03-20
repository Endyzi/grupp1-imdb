@extends('layouts.app')
@section('content')
<div class="container">
	<h2>HELLO</h2>
    <form method="POST" action="{{ route('directors.update', ['director' => $director->id]) }}">
      @csrf
      <div class="form-group">
        <label for="genre">Director</label>
        <input type="text" class="form-control" id="director" name="director" value="{{ $director->name }}" placeholder="Add director">
      </div>
      <button type="submit" class="btn btn-secondary">Change</button>
    </form>
</div>

@endsection
