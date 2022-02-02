@extends('layouts.home')

@section('title')
FILX | Streaming Movie Platform
@endsection
@section('header')
<section class="section-header">
    <div class="container">
        <h1>HIGH
            <br>
            QUALITY 
            <br>
            STREAMING FILM
        </h1>
        <a href="/register">
            <button class="btn-getstarted">Get Started</button>
        </a>
    </div>
</section>
@endsection
@section('feature')
<section class="section-feature justify-content-center align-content-center">
    <div class="box-feature">
        <div class="row text-center py-5">
            <div class="col-6">
                <img src="frontend/images/feature-1.png" alt="">
            </div>
            <div class="col-4">
                <h4>Streaming 
                    High Quality</h4>
                <p>Play your favorite movies and easy to watch</p>
            </div>
        </div>
    </div>
    <div class="box-feature">
        <div class="row text-center py-5">
            <div class="col-6">
                <img src="frontend/images/feature-2.png" alt="">
            </div>
            <div class="col-4">
                <h4>Watch Movies Casually Anywhere</h4>
                <p>Play your favorite movies and easy to watch</p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('footer')
<section class="section-footer">
    <div class="row text-center">
        <div class="col-2">
            <img src="frontend/images/instagram.svg" alt="">
            <img src="frontend/images/twitter.svg" alt="">
        </div>
        <div class="col-3">
            <ul>
                <h4>Features</h4>
                <li>Reviews</li>
                <li>Community</li>
                <li>Social Media</li>
            </ul>
        </div>
        <div class="col-3">
            <ul>
                <h4>COMPANY</h4>
                <li>Career</li>
                <li>Help Center</li>
                <li>Media</li>
            </ul>
        </div>
        <div class="col-3">
            <ul>
                <h4>GET CONNECTED</h4>
                <li>Jakarta</li>
                <li>Indonesia</li>
                <li>support@filxtv.id</li>
            </ul>
        </div>
    </div>
</section>
@endsection
