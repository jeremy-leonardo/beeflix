<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use App\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function index()
    {
        $genres = Genre::all();

        return view('index', ['genres' => $genres, 'all_genres' => $genres]);
    }

    public function detail($id)
    {
        $movie = Movie::find($id);
        $all_genres = Genre::all();

        $episodes = Episode::where('movie_id', '=', $id)->paginate(3);
        return view('detail', ['movie' => $movie, 'episodes' => $episodes, 'all_genres' => $all_genres]);
    }

    public function listByGenre($id)
    {
        $genres = [Genre::find($id)];
        $all_genres = Genre::all();

        return view('index', ['genres' => $genres, 'all_genres' => $all_genres]);
    }
}
