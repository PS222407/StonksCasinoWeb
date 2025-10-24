@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-groen">{{ __('Verander uw e-mailadres') }}</div>

                    <div class="card-body card-registreer">
                        <form class="d-inline" method="POST" action="{{ route('updatepassword') }}">
                            @csrf
                            <label for="password">Huidig wachtwoord:</label>
                            <input id="password" type="password"
                                   class="form-control @error('Wachtwoord') is-invalid @enderror" name="Wachtwoord"
                                   required autocomplete="email" autofocus>
                            @error('Wachtwoord')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="newpassword">Nieuw wachtwoord:</label>
                            <input id="newpassword" type="password"
                                   class="form-control @error('newpassword') is-invalid @enderror" name="newpassword"
                                   required autocomplete="email" autofocus>
                            @error('newpassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                            <label for="confirmpassword">Bevestig wachtwoord:</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                            <br>
                            <button type="submit"
                                    class="btn btn-groen align-baseline">{{ __('Verander wachtwoord') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
