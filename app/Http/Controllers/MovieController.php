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
        for ($i = 0; $i < $genres->count(); $i++) {
            $limit = 4;
            if ($genres[$i]->movies->count() < $limit) $limit = $genres[$i]->movies->count();
            for ($k = 0; $k < $limit; $k++) {
                $genres[$i]->movies = $genres[$i]->movies->slice(0, $limit);
            }
        }
        // Untuk membatasi agar di index (home) hanya tampil 4 movie per genre

        return view('index', ['genres' => $genres]);
    }

    public function detail($id)
    {
        $movie = Movie::find($id);

        $episodes = Episode::where('movie_id', '=', $id)->paginate(3);
        return view('detail', ['movie' => $movie, 'episodes' => $episodes]);
    }

    public function listByGenre($id)
    {
        $genres = [Genre::find($id)];

        return view('index', ['genres' => $genres]);
    }
}
