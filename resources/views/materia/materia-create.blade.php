@extends('layouts.app')
@section('contenido')
    <form action="{{url('datos')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h5 class="modal-title" id="staticBackdropLabel">Docente</h5>
        <div class="form-row">

            <input type="hidden" required name="iddo" placeholder="" value="{{$docente->id}}" id="txtiddo" require="">

            <div class="mt-3 col-md-12">
                <label for="txtfacultad">Facultad:</label>
                <select class="form-control" name="facultad" id="txtfacultad" required>
                    <option>Facultad Nacional de Ingenieria</option>
                    <option>Facultad de Derecho Ciencias Politicas y Sociales</option>
                    <option>Facultad de Ciencias Economicas Financieras y Administrativas</option>
                    <option>Facultad de Ciencias Agrarias y Naturales</option>
                    <option>Facultad de Arquitectura y Urbanismo</option>
                    <option>Facultad de Ciencias de la Salud</option>
                    <option>Facultad Tecnica</option>
                </select>
                <div class="invalid-feedback">

                </div>

            </div>

            <div class="form-group col-md-12">
                <label for="txtcarrera">Carrera:</label>
                <input type="text" class="form-control" name="carrera" placeholder="" id="txtcarrera" require="">
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="form-group col-md-4">
                <label for="txtsigla">Sigla:</label>
                <input type="text" class="form-control" name="sigla" placeholder="" id="txtsigla" require="">
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="form-group col-md-12">
                <label for="txtasignatura">Asignatura:</label>
                <input type="text" class="form-control" name="asignatura" placeholder="" id="txtasignatura" require="">
                <div class="invalid-feedback">
                </div>
            </div>

        </div>
        <div class="my-3">
            <button value="btnAgregar" class="btn btn-success" type="submit" name="accion">Agregar Materia</button>
            <a class="btn btn-secondary" href="{{url('materias/'.$docente->id)}}">Cancelar</a>
        </div>
    </form>

@endsection
