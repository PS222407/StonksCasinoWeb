@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-groen">{{ __('Verander uw e-mailadres') }}</div>

                <div class="card-body card-registreer">
                    <form class="d-inline" method="POST" action="{{ route('updateemail') }}">
                        @csrf
                        <label for="email">Verander gebruikersnaam:</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email}}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <br>
                        <button type="submit" class="btn btn-groen align-baseline">{{ __('Verander e-mail') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection