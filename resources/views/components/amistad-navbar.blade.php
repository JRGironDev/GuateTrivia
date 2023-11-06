<div class="navbar">
  <div class="nav-links">
      <button class="btn"><a href="{{ url('/dashboard')}}">Dashboard</a></button>
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

      {{-- <form action="{{ route('buscar_amigos') }}" method="GET"> --}}
        <form action="#">
        <input type="text" class="searchInput" name="busqueda" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>
    


      {{-- <input type="text" id="searchInput" placeholder="Buscar amigos">
      <button id="searchButton" class="btn btn-primary btn-sm">Buscar</button> --}}
  </div>
</div>
{{-- <script>
  const searchButton = document.getElementById('searchButton');
  const searchInput = document.getElementById('searchInput');
  searchButton.addEventListener('click', () => {
    console.log(searchInput.value);
  });
</script> --}}