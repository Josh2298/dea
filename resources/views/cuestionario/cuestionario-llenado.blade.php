@extends('layouts.app')
@section('contenido')
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1>Gracias por llenar el cuestionario</h1>
        <div class="text-center mt-3">
            <a class="btn-lg btn-link" href="{{url('logout-student')}}">Salir</a>
        </div>
    </div>
@endsection
