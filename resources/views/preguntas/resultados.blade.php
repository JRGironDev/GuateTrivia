@extends('layouts.page')

@section('content')
    <div class="container-fluid container-full-height">
        <div class="row">
            <div class="col-lg-4">
                <div class="avatar-container">
                    <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
                </div>
            </div>
            <div class="col-lg-8">
                <br>
                    <div class="card">
                        <div class="card-header" style="text-align: center">RESULTADO</div>
                        <div class="card-body">
                            <h1 style="text-align: center">Su puntuacion fue de: {{$nota}}</h1>
                        </div>
                    </div>

            </div>
    </div>
@endsection
