<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function index(Request $request) {
        $movies = DB::table('movies')->select('id', 'image', 'judul', 'sinopsis', 'link', 'slug')->get();
        return view('app.movies', compact('movies'));
    }
}
