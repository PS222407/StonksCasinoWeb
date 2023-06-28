@extends('layouts.app')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row ">
        <?php $amount = 0; ?>
   @foreach ($card_skins as $card_skin)  
   <?php $amount++; ?>
        <div class="col-12 col-lg-3 col-md-4 col-sm-6">
            <div class="row">
                <img class="img-card-shop" src="{{ asset($card_skin->web_img_path) }}" alt="">
            </div>
            <div class="row">
                <h3>{{$card_skin->name}}</h3>
            </div>
            @auth
                @if ($card_skin->name == "Default")
                    <div class="row">
                       
                             @if (Auth::user()->selected_cardskin == $card_skin->id)
                                 <h3 class="groen">Geselecteerd</h3>
                             @else
                             <form action="{{ route('selectcard')}}" method="post">
                                 @csrf
                             <input type="text" name="cardskin" id="cardskin" hidden value="{{$card_skin->id}}">
                             <button type="submit" class="btn btn-groen">Selecteren</button>
                            </form>
                             @endif
                    </div>
                @else 
                <div class="row">
                            <?php $test = false; ?>
                            @foreach ($purchased_skins as $purchased_skin)
                                @if ($purchased_skin->skinId == $card_skin->id)
                                    <?php $test = true; ?>
                                    @break
                                @endif
                            @endforeach  
                            @if ($test == true)
                                @if ($purchased_skin->skinId == Auth::user()->selected_cardskin)
                                    <h3 class="groen">Geselecteerd</h3>                                    
                                @else
                                <form action="{{ route('selectcard')}}" method="post">
                                    @csrf
                                <input type="text" name="cardskin" id="cardskin" hidden value="{{$card_skin->id}}">
                                <button class="btn btn-groen">Selecteren</button>
                               </form>
                                @endif
                            @else
                                    <label ><img src="{{asset('img/Token.png')}}" class="imgtoken" alt=""> {{$card_skin->price}}</label>
                                </div>
                                <div class="row">
                                    <button class="btn btn-groen" data-toggle="modal" data-target="#Winkelwagen{{$amount}}">Kopen</button>
                                    <div class="modal fade" id="Winkelwagen{{$amount}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header card-groen">
                                              <h5 class="modal-title" id="exampleModalLongTitle">Weet u zeker dat u dit wil kopen</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body card-registreer">
                                             <div class="row  mx-auto d-flex">
                                                 <div class="col col-sm-6 ">
                                                     <img class="imgshop" src="{{ asset($card_skin->web_img_path) }}" alt="">
                                                 </div>
                                                 <div class="col col-sm-6 pl-1 d-flex align-items-center ">
                                                     <div>
                                                     <h2>{{$card_skin->name}}</h2>
                                                     <h4>prijs: <img src="{{asset('img/Token.png')}}" class="imgtoken" alt=""> {{$card_skin->price}}</h4>
                                                     <div class="d-flex">
                                                         

                                                        <button class="btn">Annuleer</button>
                                                        <form action="{{route('buycard')}}" method="post">
                                                            @csrf
                                                            <input type="text" hidden name="buycard1" id="buycard1"  value="{{$card_skin->id}}">
                                                        <button type="submit" class="btn btn-groen">Kopen</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                             </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                            @endif 

                </div>
                @endif
            @endauth
          
        </div>
   @endforeach
</div>
</div>
@endsection