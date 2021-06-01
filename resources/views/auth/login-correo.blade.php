@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('login-student') }}" method="POST">
                        @csrf
                        <div class="my-2">
                            <label for="correo">Correo</label>
                            <input type="text" name="correo" id="correo" class="form-control">
                        </div>
                        @isset($failed)
                            <div class="alert alert-danger">{{ $failed }}</div>
                        @endisset

                        <div class="d-grid gap-1">
                            <button class="btn btn-primary">Obtener Codigo</button>
                        </div>

                        <a href="{{url('login-student')}}" class="btn btn-link">¿Ya tiene el codigo?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
