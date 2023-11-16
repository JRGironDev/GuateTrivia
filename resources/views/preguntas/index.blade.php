@extends('layouts.page')

@section('content')

    <div class="container-fluid container-full-height">
        <div class="row">
            <div class="col-lg-4">
                <div class="avatar-container">
                    <img src="images/ninio3.jpg" alt="Avatar" class="avatar">
                </div>
            </div>
            <div class="col-lg-8">
                <br>
                    <div class="card">
                        <form method="GET" action="{{ route('preguntas.resultado') }}">
                            <div class="card-header" style="text-align: center">{{$data->pregunta}}</div>
                            <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opcion" id="opcion_a" value="A">
                                        <label class="form-check-label" for="flexRadioDefault_a">
                                        {{$data->respuestas->A}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opcion" id="opcion_b" value="B">
                                        <label class="form-check-label" for="flexRadioDefault_b">
                                            {{$data->respuestas->B}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opcion" id="opcion_c" value="C">
                                        <label class="form-check-label" for="flexRadioDefault_c">
                                            {{$data->respuestas->C}}
                                        </label>
                                    </div>
                                <input type="hidden" name= "respuesta" value="{{$data->respuestas->correcta}}">
                            </div>
                            <div class="card-footer">
                                    <button class="btn btn-success ">Enviar</button>
                            </div>
                        </form>
                    </div>
            </div>
    </div>
@endsection
