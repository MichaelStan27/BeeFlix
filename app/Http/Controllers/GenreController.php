<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(Genre $genre)
    {

        //eager load
        $genre = $genre->load('movies');

        $movies = $genre->movies();

        return view('genre', [
            'genre' => $genre,
            'movies' => $movies->paginate(4),
        ]);
    }
}
