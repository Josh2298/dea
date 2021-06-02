@extends('layouts.app')
@section('contenido')

    {!! Form::open(['url' => 'datos/'.$materia->id,'method'=>'put']) !!}
    <!-- Modal -->
    <h5 class="modal-title" id="staticBackdropLabel">Materia</h5>
    <div class="form-row">

        <div class="mt-3 col-md-12">
            <label for="">Facultad:</label>
        <!--<input type="text" value="{{$materia->facultad}}" class="form-control" name="facultad" placeholder="" id="txtfacultad" require="">-->
            <select value="{{$materia->facultad}}" class="form-control" name="facultad"
                    id="txtfacultad" required>
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
            <label for="">Carrera:</label>
            <input type="text" value="{{$materia->carrera}}" class="form-control" name="carrera" placeholder=""
                   id="txtcarrera" required>
            <div class="invalid-feedback">
            </div>
        </div>

        <div class="form-group col-md-4">
            <label for="">Sigla:</label>
            <input type="text" value="{{$materia->sigla}}" class="form-control" name="sigla" placeholder=""
                   id="txtsigla" required>
            <div class="invalid-feedback">
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="">Asignatura:</label>
            <input type="text" value="{{$materia->asignatura}}" class="form-control" name="asignatura" placeholder=""
                   id="txtasignatura" required>
            <div class="invalid-feedback">
            </div>
        </div>

        <div class="my-3">
            <button value="btnAgregar" class="btn btn-success" type="submit" name="accion">Modificar</button>
            <a class="btn btn-secondary" href="{{url('materias/'.$materia->iddo)}}">Cancelar</a>
        </div>
    {!! Form::close() !!}


@endsection
