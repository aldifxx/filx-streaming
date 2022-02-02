@extends('layouts.upcoming')

@section('title')
    Upcoming Movies
@endsection

@section('upcomingmovies')
      <!--Awal upcomingr-->
      <section class="SC" id="upcoming" style="background-color: #0A0A0A;">
        <div class="container">
          <div class="row mb-3">
              <div class="col">
                  <h2 class="M1">Upcoming Movie</h2>
              </div>
          </div>
          <div class="container">
            <div class="row py-3 justify-content-center">
                @foreach($movies as $movie)
                <div class="col-2">
                      <img src="{{ $movie->image }}" alt="" width="176" height="223">
                    <p style="font-size:12px;font-weight:bold;margin-left:10px;margin-top:-30px;">{{ $movie-> judul}}</p>
                </div>
                @endforeach
            </div>
        </div>
        </div>
      </section>