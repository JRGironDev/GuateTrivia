@extends('layouts/amistad')

@section('title', 'Mis amigos')
    
@section('content')

<div class="container">
  <x-amistad-navbar/>
  <div class="titulo-tabla"><h1>Mis Amigos, Nombre: {{ Auth::user()->name }}, ID: {{ Auth::user()->id }}, Avatar: {{ Auth::user()->AvatarID }}</h1></div>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID amistad</th> 
            <th scope="col">ID user</th> 
            {{-- <th scope="col">Persona 1</th> --}}
            <th scope="col">Nombre</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($amigos as $amigo)
          <tr>
            <td>{{ $amigo['amistad_id'] }}</td>
            <td>{{ $amigo['id'] }}</td>
            <td>{{ $amigo['nombre'] }}</td>
            <td>
              <form action="{{ route('amistad.destroy', ['ID' => $amigo['amistad_id'], 'origin'=> 'amigos']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Cancelar Amistad</button>
              </form>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection