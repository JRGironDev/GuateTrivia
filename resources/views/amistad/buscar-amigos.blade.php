@extends('layouts/amistad')

@section('title', 'Buscar amigos')
    
@section('content')

<div class="container">
  <x-amistad-navbar/>
  <div class="titulo-tabla"><h1>Buscar Amigos, Nombre: {{ Auth::user()->name }}, ID: {{ Auth::user()->id }}, Avatar: {{ Auth::user()->AvatarID }}</h1></div>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($usuariosNoAmigos as $usuario)
          <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->name }}</td>
            <td>
              <form action="{{ route('enviar-solicitud-amistad') }}" method="POST">
                @csrf
                <input type="hidden" name="persona1" value="{{ Auth::id() }}">
                <input type="hidden" name="persona2" value="{{ $usuario->id }}">
                <input type="hidden" name="estado_solicitud" value="1">
                <button type="submit" class="btn btn-primary">Enviar solicitud</button>
              </form>              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection