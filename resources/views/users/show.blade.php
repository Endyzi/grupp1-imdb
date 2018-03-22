@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="mb-4"> {{ $user->name }} </h1>

<h3>Votes</h3>

  @foreach ($ratings->id as $rating)
          <a href="{{route('movies.show', ['id' => $rating->movie->id])}}">{{$rating->movie->title}}</a> Betyg: {{$rating->rating}}<br>
  @endforeach

</div>
@endsection
