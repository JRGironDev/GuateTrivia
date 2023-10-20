@extends('layouts.page')

@section('content')
    <div class="container-fluid container-full-height">
        <div class="row">
        <div class="col comic-style">
            <div class="avatar-container">
                <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
            </div>
        </div>
        <div class="col comic-style">
            <div id="play-button" class="icons">
                <a href="/" class="mr-2"><i class="fa-solid fa-circle-play fa-10x"></i></i></a>      
            </div>
            <div class="add-friends">
                <a href="/" class="mr-2"><i class="fas fa-user-plus fa-3x"></i></a>
            </div>
        </div>
       
    </div>
@endsection
