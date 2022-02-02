@extends('layouts.watch')

@section('title')
    {{ $movies-> judul}}
@endsection

@section('movie')
<div id="home" class="home" style="background-color: #0A0A0A;">
    <div class="container">
      <div class="text-center">
          <div class="row row-cols-12">
            <iframe src="{{ $movies -> link }}"" frameborder="0" width="560" height="720"  scrolling="no" allowfullscreen=""></iframe>
            <div class="col">
              <img class="image-movie py-3" style="text-align:left;" src="{{ $movies-> image }}" alt="">
                <h1 class="cols-12 m-5 " id="judul" style="text-align: left; color: white;">{{ $movies -> judul }}</h1>
                <p class="cols-12 m-5" id="sinopsis" style="text-align: left;color: white;">{{ $movies -> sinopsis }}</p>
            </div>
        </div>
      </div>
  </div>
  </div>
@endsection