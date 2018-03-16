<h1>List of all movies in DB</h1>

@foreach ($movies as $movie)
    <p>{{ $movie->titel }} - {{ $movie->releasedate }}</p>
@endforeach