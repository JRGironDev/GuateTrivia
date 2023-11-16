@extends('layouts.page')

@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid container-full-height">
      <div class="row">
          
        <!-- Avatar -->
          <div class="col comic-style">
            <div class="avatar-container">
                <img src="{{asset('images/ninio3.jpg')}}" alt="Avatar" class="avatar">
            </div>
          </div>

          <!-- Juego -->
          <div class="col comic-style">
              <!-- Boton preguntas -->
              <div id="play-button" class="icons">
                <a href="/preguntas" class="mr-2"><i class="fa-solid fa-circle-play fa-10x"></i></i></a>      
              </div>
          </div>
          
          <div class="inferior-izq">
            <div class="contenedor-boton-gt">
              <!-- Boton Añadir amigos -->
              <div class="add-friends">
                <a href="{{ url('/buscar-amigos')}}"><i class="fas fa-user-plus fa-3x"></i></a>
              </div>

              <!-- Ver Ranking -->
              <div class="boton-gt">
                <a href="{{ url('/rankings') }}">Ver Ranking</a>
              </div>

              <!-- Cambiar avatar -->
              <x-popup-avatar/>
            </div>
          </div>
      </div>
    </div>
@endsection
