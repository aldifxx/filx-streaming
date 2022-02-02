<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request) {

        if($request->has('search'))
        {
            $movies = Movies::where('judul', 'LIKE', '%' . $request->search. '%')->paginate(5);
        }
        else {
            $movies = Movies::paginate(5);
        }

        return view('app.index', compact('movies'));
    }
}
