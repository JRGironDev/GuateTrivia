@extends('layouts/amistad')

@section('title', 'Solicitudes enviadas')
    
@section('content')
  <div class="container">
    <x-amistad-navbar/>
    <div class="titulo-tabla"><h1>Solicitudes Enviadas, Nombre: {{ Auth::user()->name }}, ID: {{ Auth::user()->id }}, Avatar: {{ Auth::user()->AvatarID }}</h1></div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Persona 2</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($amistades as $amistad)
            <tr>
              <td>{{ $amistad->ID }}</td>
              <td>{{ $amistad->persona2_name }}</td>
              <td>
                <form action="{{ route('amistad.destroy', ['ID' => $amistad->ID, 'origin'=> 'enviadas']) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
@endsection