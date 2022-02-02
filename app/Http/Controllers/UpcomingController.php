<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    public function index(Request $request) {
        $movies = DB::table('movies')->select('id', 'image', 'judul', 'sinopsis', 'link', 'slug')->get();
        return view('app.upcoming', compact('movies'));
    }
}
