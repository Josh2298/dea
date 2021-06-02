@extends('layouts.app')
@section('contenido')
    <form action="{{url('docentes')}}" method="post" ectype="multipart/form-data">
    @csrf
    <!-- Modal -->
        <h5 class="modal-title" id="staticBackdropLabel">Docente</h5>
        <div class="form-row">
            <input type="hidden" required name="txtID" placeholder="" id="txtID" require="">
        </div>

        <div class="mt-3 col-md-4">
            <label for="">Apellido Paterno:</label>
            <input type="text" class="form-control" name="apellidop" placeholder="" id="txtapellidop" require="">
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="mt-3 col-md-4">
            <label for="">Apellido Materno:</label>
            <input type="text" class="form-control" name="apellidom" placeholder="" id="txtapellidom" require="">
            <div class="invalid-feedback">

            </div>
        </div>

        <div class="mt-3 col-md-12">
            <label for="">Nombre(s):</label>
            <input type="text" class="form-control" name="nombres" placeholder="" id="txtnombres" require="">
            <div class="invalid-feedback">

            </div>

        </div>
        <div class="my-3">
            <button value="btnAgregar" class="btn btn-success" type="submit" name="accion">Agregar</button>
            <a class="btn btn-secondary" href="{{url('/docentes')}}">Cancelar</a>
        </div>
    </form>

@endsection
