@extends('layouts.app')
@section('content')

<div class="container">
  <h1>{{ $actor->name }}</h1>
  <br>
  <a href="{{ route('actors.edit', ['actor' => $actor->id]) }}"><button type="button" class="btn btn-primary">Change name</button></a>
</div>

@endsection
