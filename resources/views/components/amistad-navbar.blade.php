<div class="navbar">
  <div class="nav-links">
    <button class="boton-gt"><a href="{{ url('/dashboard')}}">Dashboard</a></button>
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
        <form action="#">
        <input type="text" class="searchInput" name="busqueda" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
  </div>
</div>