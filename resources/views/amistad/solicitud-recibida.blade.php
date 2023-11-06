@extends('layouts.page')

@section('title', 'Solicitudes recibidas')
    
@section('content')
  <div class="container">
    <x-amistad-navbar/>
    {{-- <div class="titulo-tabla"><h1>Solicitudes Recibidas, Nombre: {{ Auth::user()->name }}, ID: {{ Auth::user()->id }}, Avatar: {{ Auth::user()->AvatarID }}</h1></div> --}}
    <div class="titulo-tabla"><h1>Solicitudes Recibidas</h1></div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              {{-- <th scope="col">ID</th> --}}
              <th scope="col">Usuario</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($amistades as $amistad)
            <tr>
              {{-- <td>{{ $amistad->ID }}</td> --}}
              <td>{{ $amistad->persona1_name }}</td>
              <td>
                <form action="{{ route('amistad.aceptar', ['ID' => $amistad->ID]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
                </form>
              </td>
              <td>
                <form action="{{ route('amistad.destroy', ['ID' => $amistad->ID,  'origin'=> 'recibidas']) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Rechazar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
@endsection