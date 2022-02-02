@extends('layouts.app')

@section('title')
    App
@endsection
@section('highlight')
<div id="home" class="home" style="background-color: #0A0A0A;">
    <div class="container">
      <div class="text-center">
          <div class="row row-cols-12">
              <img src="frontend/images/film1.png" class="img-home" alt="..." >
              <div class="text">
                <h2 class="title">POLAR (2019)</h2>
                <p class="sub-1">Crime | Drama | Thriller</p>
                <p class="sub-2">A retiring assassin suddenly finds himself on the 
                    receiving end <br> of a hit,contracted by none other than
                    his own employer seeking <br> to cash in on the pensions 
                    of aging employees</p>
            </div>
          </div>
      </div>
  </div>
  </div>
@endsection
@section('popular')
<section class="SC" id="populer" style="background-color: #0A0A0A;">
    <div class="container">
      </div>
        <div class="container">
         <h4>Popular</h4>
            <div class="row py-3 justify-content-center">
                @forelse($movies->slice(0,5) as $movie)
                <div class="col-2">
                    <a href="/watch/{{ $movie-> id}}/{{ $movie-> slug }}">
                        <img src="{{ $movie->image }}" alt="" width="176" height="223">
                    </a>
                    <p style="font-size:12px;font-weight:bold;margin-left:10px;margin-top:-30px;">{{ $movie-> judul}}</p>
                </div>
                @empty
                    <p>Tidak ada Data</p>
                @endforelse
            </div>
        </div>
  </section>
@endsection
@section('recentupdate')
 <!--awal recent update-->
 <section id="populer" style="background-color: #0A0A0A;">
    <div class="container">
        <h4>Recent Update</h4>
           <div class="row py-3 justify-content-center">
               @forelse($movies->slice(0,5) as $movie)
               <div class="col-2">
                   <a href="/watch/{{ $movie-> id}}/{{ $movie-> slug }}">
                       <img src="{{ $movie->image }}" width="176" height="223" alt="" width="">
                   </a>
                   <p style="font-size:12px;font-weight:bold;margin-left:10px;margin-top:-30px;">{{ $movie-> judul}}</p>
               </div>
               @empty
                   <p>Tidak ada Data</p>
               @endforelse
           </div>
       </div>
  </section>
@endsection