@extends('layouts.app')

@section('title')
    App
@endsection

@section('movieheader')
<section class="section-highlight">
    <div class="container">
        <div class="highlight-movie text-center py-1">
        </div>
    </div>
</section>
@endsection
@section('popular')
<section class="section-popular">
    <div class="container">
     <h4>Popular</h4>
        <div class="row justify-content-center">
            @forelse($movies->slice(0,5) as $movie)
            <div class="col-2">
                <a href="/watch/{{ $movie-> id}}/{{ $movie-> slug }}">
                    <img src="{{ $movie->image }}" alt="">
                </a>
            </div>
            @empty
                <p>Tidak ada Data</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
@section('recentupdate')
<section class="section-recentupdate">
    <div class="container">
     <h4>Recent Update</h4>
        <div class="row justify-content-center">
            @forelse($movies->slice(0,5) as $movie)
                <div class="col-2">
                    <a href="/watch/{{ $movie-> id }}">
                        <img src="{{ $movie->image }}" alt="">
                    </a>
                </div>
                @empty
                    <p>Tidak ada Data</p>
            @endforelse
        </div>
    </div>
</section>
@endsection