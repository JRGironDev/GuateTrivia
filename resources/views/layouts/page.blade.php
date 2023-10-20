<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"/>
    @vite(['resources/css/styles.css'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>Página con estilo de cómic</title>   
  
</head>
<body>
 <!-- Page Heading -->   

  <div class="comic-header" style="background: url('images/bus.png');">
    <img src="images/jmarroquin.jpg" alt="Imagen circular" class="img-circle">
    <div class="content">
      <h2>{{ Auth::user()->name }}</h2>
      <div class="progress">
        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="rotate-text">Nivel 7</span></div>
      </div>
      <h2>955 Pts.</h2>
    </div>
    <div class="icons">
      <a href="/" class="mr-2"><i class="fas fa-medal fa-3x"></i></a>
      <a href="{{ __('profile') }}"><i class="fas fa-gear fa-3x"></i></a>
    </div>
  </div>

  <!-- Page Heading --> 

 <!-- Page Content -->
 <main>
  @yield('content')
 </main> 
 <!-- Page Content -->

  <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
