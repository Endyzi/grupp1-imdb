<?php

namespace App\Http\Controllers;

use Session;
use App\Movie;
use App\Director;
use App\Genre;
use App\Actor;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('movies/index', ['movies' => Movie::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create', [
            'directors' => Director::orderBy('name')->get(),
            'genres' => Genre::orderBy('name')->get()
        ]);   //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $movie = new Movie();
        $movie->titel = $request->input('movie');
        $movie->description = $request->input('description');
        $movie->releasedate = $request->input('releasedate');
        $movie->length = $request->input('length');
        $movie->director_id = $request->input('director');
        $movie->cover_url = $request->input('cover_url');

        $movie->save();

        foreach ($request->input('genre') as $genre_id) {
            $movie->genres()->attach($genre_id);
        }

        return redirect()->route('movies.index'); /** länkar till filen index.blade.php i filen genres */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies/show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies/edit', ['movie' => $movie, 'directors' => Director::get(), 'genres' => Genre::get(), 'actors' => Actor::get(), 'genres' => Genre::get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Movie $movie)
    {
        $movie->titel = $request->input('movie');
        $movie->description = $request->input('description');
        $movie->releasedate = $request->input('releasedate');
        $movie->length = $request->input('length');
        $movie->cover_url = $request->input('cover_url');
        $movie->director_id = $request->input('director');
        $movie->save();
        $movie->genres()->sync($request->input('genres'));
        $movie->actors()->sync($request->input('actors'));

        return redirect()->route('movies.show', ['movie' => $movie->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
