@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row mx-auto">
        <div class="col-12 my-5 card-registreer p-0 m-0 card card-body ">
            <div class="Titelbar-accounts">
                <h3 class="p-2 m-0">Geld storten</h3>
            </div>
            
            <div class="container account-info">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <p class="m-0">Huidig saldo: €{{ Auth::user()->token }}</p>
                        <br>
                        <form action="{{ route('update') }}" method="post">
                            @csrf
                        <label for="token">Geld Storten</label>
                        <input type="text" id="tokens"  class="form-control @error('tokens') is-invalid @enderror" name="tokens" placeholder="Voer hier uw bedrag in">
                        @error('tokens')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                     <br>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                              <strong>Google recaptcha :</strong>
{{--                              {!! NoCaptcha::renderJs() !!}--}}
{{--                              {!! NoCaptcha::display() !!}--}}
                           </div>
                        </div>
                     </div>
                <button type="submit" class="btn btn-lg btn-groen ">Betalen</button>
            </form>

                    </div>
                    <div class="col-md-6">
                        <br>
                        <p class="paymend-method">Betaalmethode's</p>
                        <div class="row img-payment">
                            <div class="col-auto"><img src="{{ asset('img/ideal.png') }}" alt=""></div>
                            <div class="col-auto"><img src="{{ asset('img/paypal.png') }}" alt=""></div>
                            
                        </div>
                    </div>
                 
                </div>
            </div>
            <br>
        </div>
    </div>
        <div class="row mx-auto ">
        <div class="col-12 card-registreer mb-5 p-0 m-0 card card-body ">
            <div class="Titelbar-accounts">
                <h3 class="p-2 m-0">Account informatie</h3>
            </div>
            
            <div class="container account-info">
                <div class="row w-100">
                    <div class="col-auto">
                        <br>
                        <h3>
                            Gebruikersnaam: {{ Auth::user()->username}}
                        </h3>
                        <a href="{{ route('ChangeUsername')}}" class="groen">Verander mijn gebruikersnaam</a>
                        <br> <br>
                        <h3>
                            E-mailadres: {{ Auth::user()->email}}
                        </h3>
                        <a href="{{ route('ChangeEmail')}}" class="groen">Verander mijn e-mailadres</a>
                        <br>
                        <a href="{{ route('ChangePassword')}}" class="groen">Verander mijn wachtwoord</a>
                            <br><br>
                    </div>
                    <div class="col d-none  d-md-block jusitfy-content-center ">
                        <br>
                        <img class="account-logo d-flex mx-auto " src="{{ asset('img/accountlogo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
