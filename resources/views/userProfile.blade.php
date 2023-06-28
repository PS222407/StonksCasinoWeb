@extends('layouts.management')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-4">
          
        </div>
        <div class="col">
            <h1>Transacties</h1>
            <br>
        </div>
    </div>
    <div class="row ">
        <div class="col-4 p-0 m-0">
            <div class="shadow-lg p-2">
            <div class="row">
                <div class="col-4">
                    <img width="100%" src="{{asset('img/accountlogo.png')}}" alt="">
                </div>
                <div class="col my-auto">
                    <h2>{{$user->username}}</h2></div>
            </div>
            <div class="row mt-3">
                <div class="col-4 ">
                    <h5>Voornaam:</h5>
                    <h5>Achternaam:</h5>
                    <h5>E-mail:</h5>
                    <h5>geverifieerd:</h5>
                    <h5>Geboortedatum:</h5>                    
                    <h5>Ingelogd:</h5>
                    <h5>Tokens:</h5>
                </div>
                <div class="col ml-3 text-truncate">
                    <h5 class="text-truncate">{{$user->firstname}}</h5>
                    <h5 class="text-truncate">{{$user->lastname}}</h5>
                    <h5 class="text-truncate">{{$user->email}}</h5>
                    @if ($user->email_verified_at != NULL)
                        <h5>Ja</h5>
                    @else
                        <h5>Nee</h5>
                    @endif
                    <h5 class="text-truncate">{{$user->dateofbirth}}</h5>
                    @if ($user->active == true)
                        <h5>Ja</h5>
                    @endif
                    @if ($user->active == false)
                    <h5>Nee</h5>
                @endif
                <h5 class="text-truncate">{{$user->token}}</h5>            
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('management.ban', $user->id)}}" class="btn btn-secondary d-block">@if ($user->banned == false)
                        Ban
                    @else
                        Unban
                    @endif</a>
                </div>
                <div class="col-6">
                 
                    <button type="button" class="btn btn-secondary d-block w-100" data-toggle="modal" data-target="#exampleModal">
                        Verwijder
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content ">
                            <div class="modal-header bg-light">
                              <h5 class="modal-title" id="exampleModalLabel">Account verwijderen?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body bg-light">
                              Weet u zeker dat u het account van {{$user->username}} wilt verwijderen?
                            </div>
                            <div class="modal-footer bg-light">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
                              <a href="{{ route('management.remove', $user->id)}}" class="btn btn-primary">Bevestig</a>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-2"><h5>Tokens</h5></div>
                <div class="col-3"><h5>Bron</h5></div>
                <div class="col-2"><h5>Tokens voor</h5></div>
                <div class="col-2"><h5>Tokens na</h5></div>
                <div class="col-3"><h5>Tijd</h5></div>

            </div>
            <div class="transactions">
            @foreach ($transactions as $trans)
 
        <div class="row m-2 shadow">
            <div class="col-2"><h5>{{$trans->tokens}}</h5></div>
            <div class="col-3"><h5>{{$trans->sender}}</h5></div>
            <div class="col-2"><h5>{{$trans->tokensBefore}}</h5></div>
            <div class="col-2"><h5>{{$trans->tokensAfter}}</h5></div>
            <div class="col-3"><h5>{{$trans->timestamp}}</h5></div>
        </div>

        
    @endforeach
            </div>
        
    </div>
    </div>
    <div class="row">
        <div class="col">
            <br>
            <a href="{{ route('manegement')}}">
            <h4>&#8592; Terug</h4></a>
        </div>
    </div>

</div>
@endsection