@extends('layouts.page')

@section('content')

  <button class="boton-gt"><a href="{{ url('/dashboard')}}">Dashboard</a></button>

    <div class="container-fluid container-full-height">
        <div class="row">
            <div class="col-lg-4">
                <div class="avatar-container">
                    <a href="/dashboard">
                        <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
                    </a>
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
