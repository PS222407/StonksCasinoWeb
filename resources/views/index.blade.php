@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row card-layout">
        <div class="col-12 col-md-6 col-lg-4 d-table card-margin">
            <div class="card-home card card-body d-table-cell align-middle">
                
                <div class="row">
                    <div class="col-12">
                        <label class="titel-card">Download de StonksCasino app nu!</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid" src="{{ asset('img/stonks.png') }}" alt="">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a class="btn btn-success btn-lg btn-download" href="{{ asset('applicatie/StonksCasino.application') }}" download>Download</a>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-table card-margin">
            <div class="card-home card card-body d-table-cell align-middle">

            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-table card-margin">
            <div class="card-home card card-body d-table-cell align-middle">

            </div>
        </div>
    </div>
</div>
@endsection