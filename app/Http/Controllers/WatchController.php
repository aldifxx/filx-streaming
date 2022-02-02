<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WatchController extends Controller
{
    public function index(Request $request) {
        return view('app.watch',['movies' => $movie]);
    }

    public function show($movies_id){
        $result= Movies::findOrFail($movies_id);

        return view('app.watch',['movies'=>$result]);
    }
}