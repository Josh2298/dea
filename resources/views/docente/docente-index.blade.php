@extends('layouts.app')
@section('contenido')

    <a href="{{url('docentes/create')}}" class="btn btn-primary my-3">
        Registrar Docente
    </a>
    <form action="{{ url('docentes-search') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="docente" placeholder="Ingrese nombre"
                   aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" id="button-addon2">Buscar</button>
        </div>

    </form>



    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
            <tr class="table-dark">
                <th>Nombre Completo</th>
                <th class="text-end">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($docentes as $docente)
                <tr class="table-secondary">
                    <td>{{$docente->nombrecompleto}}</td>
                    <td class="text-end">
                        <div class="btn-group">
                            <a href="{{url('docentes/'.$docente->id.'/edit')}}" class="btn btn-sm btn-info">Editar</a>
                            <a href="{{url('materias/'.$docente->id)}}" class="btn btn-sm btn-success">Materia</a>
                            <form class="btn-group" action="{{url('docentes/'.$docente->id)}}" method="POST"
                                  onclick="return confirm('¿Realmente deseas borrar?');">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
