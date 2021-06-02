@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('login-student-form') }}" method="POST">
                        @csrf
                        <!--<div class="my-2">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo" class="form-control">
                        </div>-->
                        <div class="my-2">
                            <label for="cuenta">Sigla</label>
                            <input type="text" name="cuenta" id="cuenta" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        @isset($failed)
                            <div class="alert alert-danger">{{ $failed }}</div>
                        @endisset

                        <div class="d-grid gap-1">
                            <button class="btn btn-primary">INGRESAR</button>
                        </div>

                        <!--<a href="{{url('login-correo')}}" class="btn btn-link">¿Aun no tiene el codigo?</a>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
