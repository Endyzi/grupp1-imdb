@extends('layouts.app')
@section('content')

<div class="container">
  <h1>{{ $director->name }}</h1>
  <a href="{{ route('directors.edit', ['director' => $director->id]) }}"><button type="button" class="btn btn-primary">Change</button></a>
</div>

@endsection
