<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function index()
    {
        $genres = Genre::all();

        return view('home', ['genres' => $genres]);
    }
}
