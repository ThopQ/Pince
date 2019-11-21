<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Director;
use App\Actor;
use App\Genre;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all()->sortBy('name');
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directors = Director::all()->sortBy('name');
        $actors = Actor::all()->sortBy('name');
        $genres = Genre::all()->sortBy('name');

        return view('movies.create', compact('directors', 'actors', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:genres'],
            'description' => ['required'],
            'year' => ['required'],
            'fsk' => ['required', Rule::in([0, 6, 12, 16, 18])],
            'director_id' => ['exists:directors,id'],
            'actors' => ['exists:actors,id'],
            'genres' => ['exists:genres,id'],
            'image_url' => ['nullable', 'url'],
            'steelbook' => ['required']
        ]);

        Movie::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'year' => $validatedData['year'],
            'fsk' => $validatedData['fsk'],
            'director_id' => $validatedData['director_id'],
            'image_url' => $validatedData['image_url'],
            'steelbook' => $validatedData['steelbook']
        ]);

        $movie = Movie::latest()->first();
        $actors = $request->actor;
        $genres = $request->genre;

        $this->attachActors($movie, $actors);
        $this->attachGenres($movie, $genres);

        return redirect('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function attachActors($movie, $actors)
    {
        foreach ($actors as $actor) {
            $movie->actors()->attach($actor);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function attachGenres($movie, $genres)
    {
        foreach ($genres as $genre) {
            $movie->genres()->attach($genre);
        }
    }
}
