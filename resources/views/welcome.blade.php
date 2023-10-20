<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name', 'GuateTrivia') }}</title>         
</head>
<body>
    <header>
        <div id="hero" class="p-5 text-center img-fluid img-thumbnail "
            style="background-image: url('images/Bosque.png')">        
            <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <img class="d-block mx-auto mb-4" src="{{URL::asset('images/resplendent-quetzal.png')}}" alt="" width="72" height="57">
                <h1 class="display-5 fw-bold">GuateTrivia</h1>
                <h5 class="mb-4">
                Una plataforma interactiva para aprender historia de Guatemala jugando.
                </h5>
                <a id="boton-inicio" class="btn btn-outline-light btn-lg m-2" href="{{'/login'}}"
                role="button" rel="nofollow">Iniciar Sesión</a>              
            </div>
            </div>       
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
