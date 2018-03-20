<h1>List of all actors in DB</h1>

@foreach ($movies as $movie)
    <p>{{ $movie->titel }} - {{ $movie->releasedate }}</p>
@endforeach