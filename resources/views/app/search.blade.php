@extends('layouts.search')

@section('title')
    Search
@endsection

@section('search')
 <!--Awal movie-->
 <section class="SC" id="populer" style="background-color: #0A0A0A;">
  <div class="container">
    <div class="row mb-3">
        <div class="col">
            <h2 class="M1">Search Movies</h2>
        </div>
    </div>
    <div class="container">
         <div class="row py-3">
             @foreach($movies as $movie)
             <div class="col-2">
                 <a href="/watch/{{ $movie-> id}}/{{ $movie-> slug }}">
                     <img src="{{ $movie->image }}" alt="" width="176" height="223">
                 </a>
                 <p style="font-size:12px;font-weight:bold;margin-left:10px;margin-top:-30px;">{{ $movie-> judul}}</p>
             </div>
             @endforeach
         </div>
     </div>
  </div>
</section>
@endsection