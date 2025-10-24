@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-groen">{{ __('Verander je gebruikersnaam') }}</div>

                    <div class="card-body card-registreer">
                        <form class="d-inline" method="POST" action="{{ route('updateusername') }}">
                            @csrf
                            <label for="username">Verander gebruikersnaam:</label>
                            <input id="username" type="text"
                                   class="form-control @error('username') is-invalid @enderror" name="username"
                                   value="{{ Auth::user()->username}}" required autocomplete="name" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <button type="submit"
                                    class="btn btn-groen align-baseline">{{ __('Verander gebruikersnaam') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
