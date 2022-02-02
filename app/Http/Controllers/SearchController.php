<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $movies = Movies::where('judul', 'LIKE', '%' . $request->search. '%')->paginate(5);
        }
        else {
            $movies = Movies::paginate(5);
        }
        return view('app.search', compact('movies'));
    }
}
