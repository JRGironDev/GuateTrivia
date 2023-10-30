@extends('layouts.popup')

@section('content')


    <div class="container-fluid container-full-height">
        <div class="row">
            <x-popup-avatar/> 
        <div class="col comic-style">
            <div class="avatar-container">
                <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
            </div>
        </div>
        <div class="col comic-style">
            <div>
                <h1 class="text-center">Buscar Amigos</h1> 
            </div>
            <div class="add-friends">
                <a href="/" class="mr-2"><i class="fas fa-user-plus fa-3x"></i></a>
            </div>
        </div>
       
    </div>
@endsection
