@extends('layouts.app')
@section('contenido')

<h1>{{$docente->apellidop.' '.$docente->apellidom.' '.$docente->nombres}}</h1>

<div class="table-responsive">

    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-dark">
                <th>CO_1_P1</th>
                <th>CO_1_P2</th>
                <th>CO_1_P3</th>
                <th>CO_1_P4</th>
                <th>CO_1_P5</th>
                <th>CO_2_P1</th>
                <th>CO_2_P2</th>
                <th>CO_2_P3</th>
                <th>CO_2_P4</th>
                <th>CO_2_P5</th>
                <th>CO_3_P1</th>
                <th>CO_3_P2</th>
                <th>CO_3_P3</th>
                <th>CUA_1_P1</th>
                <th>CUA_1_P2</th>
                <th>CUA_1_P3</th>
                <th>CUA_2_P1</th>
                <th>CUA_2_P2</th>
                <th>CUA_2_P3</th>
                <th>CUA_2_P4</th>
                <th>CUA_3_P1</th>
                <th>CUA_3_P2</th>
                <th>CUA_3_P3</th>
                <th>CUA_3_P4</th>
                <th>CUA_3_P5</th>
                <th>CUA_4_P1</th>
                <th>CUA_4_P2</th>
                <th>CUA_4_P3</th>
                <th>CUM_1_P1</th>
                <th>CUM_2_P1</th>
                <th>CUM_2_P2</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
            <tr class="table-secondary">
                <td>{{$nota->CO_1_P1}}</td>
                <td>{{$nota->CO_1_P2}}</td>
                <td>{{$nota->CO_1_P3}}</td>
                <td>{{$nota->CO_1_P4}}</td>
                <td>{{$nota->CO_1_P5}}</td>
                <td>{{$nota->CO_2_P1}}</td>
                <td>{{$nota->CO_2_P2}}</td>
                <td>{{$nota->CO_2_P3}}</td>
                <td>{{$nota->CO_2_P4}}</td>
                <td>{{$nota->CO_2_P5}}</td>
                <td>{{$nota->CO_3_P1}}</td>
                <td>{{$nota->CO_3_P2}}</td>
                <td>{{$nota->CO_3_P3}}</td>
                <td>{{$nota->CUA_1_P1}}</td>
                <td>{{$nota->CUA_1_P2}}</td>
                <td>{{$nota->CUA_1_P3}}</td>
                <td>{{$nota->CUA_2_P1}}</td>
                <td>{{$nota->CUA_2_P2}}</td>
                <td>{{$nota->CUA_2_P3}}</td>
                <td>{{$nota->CUA_2_P4}}</td>
                <td>{{$nota->CUA_3_P1}}</td>
                <td>{{$nota->CUA_3_P2}}</td>
                <td>{{$nota->CUA_3_P3}}</td>
                <td>{{$nota->CUA_3_P4}}</td>
                <td>{{$nota->CUA_3_P5}}</td>
                <td>{{$nota->CUA_4_P1}}</td>
                <td>{{$nota->CUA_4_P2}}</td>
                <td>{{$nota->CUA_4_P3}}</td>
                <td>{{$nota->CUM_1_P1}}</td>
                <td>{{$nota->CUM_2_P1}}</td>
                <td>{{$nota->CUM_2_P2}}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
