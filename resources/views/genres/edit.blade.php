@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('genres.update', ['genre' => $genre->id]) }}">
      @csrf
      <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" value="{{ $genre->name }}" placeholder="Edit genre">
      </div>
      <button type="submit" class="btn btn-secondary">Change</button>
    </form>
</div>

@endsection
