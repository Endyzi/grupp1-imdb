@extends('layouts.app')
@section('content')
<div class="container">
	<h2>Actor</h2>
    <form method="POST" action="{{ route('actors.update', ['actor' => $actor->id]) }}">
      @csrf
      <div class="form-group">
        <label for="genre">Actor</label>
        <input type="text" class="form-control" id="actor" name="actor" value="{{ $actor->name }}" placeholder="edit actor">
      </div>
      <button type="submit" class="btn btn-secondary">Change</button>
    </form>
</div>

@endsection
