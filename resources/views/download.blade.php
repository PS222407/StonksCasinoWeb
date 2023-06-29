@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-12 col-lg-6 mb-3 mb-lg-0 text-download">
            <h1>StonksCasino</h1>
            <p>Dit is de applicatie van StonksCasino. De applicatie bevat games zoals poker, blackjack, roulette, horserace, slotmachine en nog veel meer. Ook bevat de applicatie een winkel waar je diverse skins kan halen. </p>
            <p>De applicatie vereist een login voor gebruik!</p>
            <a class="btn btn-groen btn-lg" href="{{ asset('applicatie/Application Files/StonksCasinoDesktop.zip') }}" download>Download desktop</a>
            <a class="btn btn-groen btn-lg" href="{{ asset('applicatie/Application Files/com.companyname.librarywindow-Signed.apk') }}" download>Download mobile</a>
        </div>
        <div class="col-12 col-lg-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/games/Blackjackimg.PNG') }}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/games/Horseraceimg.PNG') }}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/games/Pokerimg.PNG') }}" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/games/Rouletteimg.PNG') }}" alt="Fourht slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/games/Slotmachineimg.PNG') }}" alt="Fifth slide">
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection