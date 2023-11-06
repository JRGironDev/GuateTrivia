@extends('layouts.popup')

@section('content')

<!-- Ventana modal Insignias -->
<div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="tituloVentana" aria-hidden="true">
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="tituloVentana" >Título de la ventana modal</h5>
          <button class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="avatares" class="alert alert-success">
            <img src="{{asset('images/Plata.png')}}" alt="">
            <img src="{{asset('images/PiezadeOro.png')}}" alt="">
            <img src="{{asset('images/diamante.png')}}" alt="">
            <img src="{{asset('images/Zafiro.png')}}" alt="">                    
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warming" type="button" data-dismiss="modal" >Cerrar</button>
          <button class="btn btn-success" > Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Ventana modal Insignias -->

    <div class="container-fluid container-full-height">
        <div class="row">
            <x-popup-avatar/>
        <div class="col comic-style">
            <div class="avatar-container">
                <a href="/dashboard">
                   <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
                </a>
            </div>
            
        </div>
        <div class="col comic-style">
            <div id="play-button" class="icons">
                <a href="/preguntas" class="mr-2"><i class="fa-solid fa-circle-play fa-10x"></i></i></a>      
            </div>
            <div class="add-friends">
                <a href="/" class="mr-2"><i class="fas fa-user-plus fa-3x"></i></a>
            </div>
        </div>
    </div>
@endsection
