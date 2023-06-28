@extends('layouts.management')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mx-3">
            <h1>Klanten</h1>
        </div>
    </div>
    <div class="row" >
        
        
        @foreach ($users as $user)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="p-3 m-3 shadow rounded card">
                    <a href="management/{{$user->id}}" class="stretched-link"></a>
                    <div class="row">
                        <div class="col-3">
                            <img width="100%" src="{{asset('img/accountlogo.png')}}" alt="autist">
                        </div>
                        <div class="col">
                            <h4>{{$user->username}}</h4>
                            <p class="p-0 m-0">{{$user->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
   
</div>
</div>

@endsection