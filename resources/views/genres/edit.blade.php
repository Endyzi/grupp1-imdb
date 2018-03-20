@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('genres.update', ['genre' => $genre->id]) }}">
      @csrf
      <div class="form-group">
        <label for="genre">Genre namn</label>
        <input type="text" class="form-control" id="genre" name="genre" value="{{ $genre->name }}" placeholder="editera genre">
      </div>
      <button type="submit" class="btn btn-secondary">Ändra</button>
    </form>
</div>

@endsection