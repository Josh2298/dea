@extends('layouts.app')
@section('contenido')

<h1>{{$docente->apellidop.' '.$docente->apellidom.' '.$docente->nombres}}</h1>
<a href="{{url('materias/'.$docente->id.'/create')}}" class="btn btn-primary my-3">
    Registrar Materia
</a>

<div class="row">

    <table class="table table-hover table-bordered table-responsive">
        <thead class="thead-dark">
            <tr class="table-dark">
                <th>Facultad</th>
                <th>Carrera</th>
                <th>Sigla</th>
                <th>Asignatura</th>
                <th>Codigo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
            <tr class="table-secondary">
                <td>{{$materia->facultad}}</td>
                <td>{{$materia->carrera}}</td>
                <td>{{$materia->sigla}}</td>
                <td>{{$materia->asignatura}}</td>
                <td>{{$materia->codigo}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{url('materias/'.$materia->id.'/nota')}}" class="btn btn-success">Notas</a>
                        <a href="{{url('datos/'.$materia->id.'/edit')}}" class="btn btn-info">Editar</a>
                        <form action="{{url('codigo')}}" method="POST" onclick="return confirm('¿Realmente desea modificar el codigo?');">
                            @csrf
                            <input type="hidden" name="id" value="{{$materia->id}}">
                            <button type="submit" class="btn btn-secondary">Codigo</button>
                        </form>
                        <form action="{{url('datos/'.$materia->id)}}" method="POST" onclick="return confirm('¿Realmente deseas borrar?');">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
