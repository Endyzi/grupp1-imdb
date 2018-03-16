<h1>List of all movies in DB</h1>

@foreach ($movies as $movie)
    <p>{{ $movie->title }} - {{ $movie->releasedate }}</p>
@endforeach