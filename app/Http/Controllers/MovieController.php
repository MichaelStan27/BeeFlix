<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Movie $movie)
    {
        //eager load
        $movie = $movie->load('episodes', 'genre');

        $episodes = $movie->episodes();
        $genre = $movie->genre;

        return view('movie-detail', [
            'movie' => $movie,
            'episodes' => $episodes->paginate(3),
            'genre' => $genre
        ]);
    }
}
