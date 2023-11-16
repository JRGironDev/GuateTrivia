@extends('layouts.page')

@section('content')
    {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-green-600 font-semibold">
            {{ __('Dashboard') }}
        </x-nav-link>
    </div> --}}
    {{-- <div>
        <button class="boton-gt"><a href="{{ url('/dashboard')}}">Dashboard</a></button>
    </div> --}}

    <button class="boton-gt"><a href="{{ url('/dashboard')}}">Dashboard</a></button>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p-6 bg-white border-b border-gray-800 page-header">
                        <h2 class="text-2xl font-semibold text-center text-green-600 dark:text-green-400 mb-4">
                            Ranking de Usuarios
                        </h2>

                        <table class="min-w-full mt-4 border">
                            <!-- Encabezados de la taba -->
                            <thead class="bg-green-100 dark:bg-gray-700">
                            <tr>
                                <th class="px-8 py-2 front-bold border text-green-800">Puesto</th>
                                <th class="px-8 py-2 font-bold border text-green-800">Mejor Trofeo</th>
                                <th class="px-4 py-2 font-bold border text-green-800">Nombre de Usuario</th>
                                <th class="px-4 py-2 font-bold border text-green-800">Correo Electrónico</th>
                                <th class="px-4 py-2 font-bold border text-green-800">Nivel de Usuario</th>
                            </tr>
                            </thead>
                            <!-- Contenido de la tabla -->
                            <tbody>
                            @php
                                $contador=0;
                            @endphp
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td class="px-8 py-2 border text-green-700">{{++$contador}}</td>
                                    <td class="px-8 py-2 border text-green-700">{{ $usuario->mejortrofeo }}</td>
                                    <td class="px-4 py-2 border text-green-700">{{ $usuario->name }}</td>
                                    <td class="px-4 py-2 border text-green-700">{{ $usuario->email }}</td>
                                    <td class="px-4 py-2 border text-green-700">{{ $usuario->nivelusuario }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
