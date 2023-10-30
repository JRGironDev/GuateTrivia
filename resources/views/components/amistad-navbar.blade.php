{{-- <nav>
    {{-- <div class="boton-bar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="{{ url('/mis-amigos')}}">Mis Amigos</a></li>
            <li><a href="{{ url('/buscar-amigos')}}">Buscar Amigos</a></li>
            <li><a href="{{ url('/solicitud-enviada')}}">Solicitudes Enviadas</a></li>
            <li><a href="{{ url('/solicitud-recibida')}}">Solicitudes Recibidas</a></li>
        </ul>
    {{-- </div> 
    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Buscar amigos">
        <button id="searchButton" class="btn btn-primary btn-sm">Buscar</button>
    </div>
</nav> --}}

<div class="navbar">
  <div class="nav-links">
      <button class="btn">Dashboard</button>
      <!-- <button class="btn">Enlace 2</button> -->
  </div>
  <div class="dropdown">
      <button class="btn">Amistades</button>
      <div class="dropdown-content">
        <a href="{{ url('/mis-amigos')}}">Mis Amigos</a>
        <a href="{{ url('/buscar-amigos')}}">Buscar Amigos</a>
      </div>
  </div>
<div class="dropdown">
      <button class="btn">Solicitudes</button>
      <div class="dropdown-content">
        <a href="{{ url('/solicitud-enviada')}}">Enviadas</a>
        <a href="{{ url('/solicitud-recibida')}}">Recibidas</a>
      </div>
  </div>
  <div class="search-container">
      {{-- <input type="text" placeholder="Buscar...">
      <button class="btn">Buscar</button> --}}

      <form action="{{ route('buscar_amigos') }}" method="GET">
        <input type="text" class="searchInput" name="busqueda" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
    


      {{-- <input type="text" id="searchInput" placeholder="Buscar amigos">
      <button id="searchButton" class="btn btn-primary btn-sm">Buscar</button> --}}
  </div>
</div>


    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Eleventh navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">GuateTrivia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Ver</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Mis Amigos</a></li> <!-- amigos confirmados -->
                <li><a class="dropdown-item" href="#">Buscar Amigos</a></li> <!-- cualquie usuario que no sea amigo confirmado -->
                <li><a class="dropdown-item" href="#">Solicitudes Enviadas</a></li> <!-- solicitud de amistad enviadas por mi -->
                <li><a class="dropdown-item" href="#">Solicitudes Recibidas</a></li> <!-- solicitud de amistad recibidas -->
              </ul>
            </li>
          </ul>
          <form role="search">
            <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
          </form>
          <div class="boton">
            <button class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </div>
    </nav> --}}