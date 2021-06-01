@extends('layouts.app')
@section('contenido')
<form class="form-horizontal" action="{{url('/cuestionario-store')}}" method="POST">
    @csrf
    <input type="hidden" name="iddato" value="{{$dato->id}}">
    <h1>{{$dato->facultad}}</h1>
    <h2>{{$dato->carrera}}</h2>
    <h3>{{$dato->sigla.' - '.$dato->asignatura}}</h3>
    <fieldset>

    <!-- Form Name -->
    <legend>Encuesta</legend>
    <b><h1>CONOCIMIENTOS DE LA ASIGNATURA</h1></b>
    <b><h4>1. DEMOSTRACION DE CONOCIMIENTOS</h4></b>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente, no tiene dificultades para responder algunas interrogantes que se le plantea en clase</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-0">
          <input type="radio" name="CO_1_P1" id="radios-0" value="1" class="@error('CO_1_P1') is-invalid @enderror">
          Nunca las tiene
        </label>
        </div>
      <div class="radio">
        <label for="radios-1">
          <input type="radio" name="CO_1_P1" id="radios-1" value="2" class="@error('CO_1_P1') is-invalid @enderror">
          Tiene
        </label>
        </div>
      <div class="radio">
        <label for="radios-2">
          <input type="radio" name="CO_1_P1" id="radios-2" value="3" class="@error('CO_1_P1') is-invalid @enderror">
          Siempre las tiene
        </label>
        </div>
      </div>
      @error('CO_1_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">En la explicación desarrollada, advierte Ud., que el docente domina la asignatura.</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-3">
          <input type="radio" name="CO_1_P2" id="radios-3" value="1" class="@error('CO_1_P2') is-invalid @enderror">
          Bastante
        </label>
        </div>
      <div class="radio">
        <label for="radios-4">
          <input type="radio" name="CO_1_P2" id="radios-4" value="2" class="@error('CO_1_P2') is-invalid @enderror">
          Regular
        </label>
        </div>
      <div class="radio">
        <label for="radios-5">
          <input type="radio" name="CO_1_P2" id="radios-5" value="3" class="@error('CO_1_P2') is-invalid @enderror">
          Nada
        </label>
        </div>
      </div>
      @error('CO_1_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">Los objetivos planteados en su criterio, estan relacionados con los contenidos que el docente desarrolla en cada clase</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-6">
          <input type="radio" name="CO_1_P3" id="radios-6" value="1" class="@error('CO_1_P3') is-invalid @enderror">
          Muy bien relacionados
        </label>
        </div>
      <div class="radio">
        <label for="radios-7">
          <input type="radio" name="CO_1_P3" id="radios-7" value="2" class="@error('CO_1_P3') is-invalid @enderror">
          Relacionados
        </label>
        </div>
      <div class="radio">
        <label for="radios-8">
          <input type="radio" name="CO_1_P3" id="radios-8" value="3" class="@error('CO_1_P3') is-invalid @enderror">
          Nada relacionados
        </label>
        </div>
      </div>
      @error('CO_1_P3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">En el desarrollo del tema, el docente demuestra falta de conocimientos</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-9">
          <input type="radio" name="CO_1_P4" id="radios-9" value="1" class="@error('CO_1_P4') is-invalid @enderror">
          Frecuentemente
        </label>
        </div>
      <div class="radio">
        <label for="radios-10">
          <input type="radio" name="CO_1_P4" id="radios-10" value="2" class="@error('CO_1_P4') is-invalid @enderror">
          Alguna vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-11">
          <input type="radio" name="CO_1_P4" id="radios-11" value="3" class="@error('CO_1_P4') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CO_1_P4')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente, tiene facilidad en la ejemplificacion de algunos temas</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-12">
          <input type="radio" name="CO_1_P5" id="radios-12" value="1" class="@error('CO_1_P5') is-invalid @enderror">
          Bastante facilidad
        </label>
        </div>
      <div class="radio">
        <label for="radios-13">
          <input type="radio" name="CO_1_P5" id="radios-13" value="2" class="@error('CO_1_P5') is-invalid @enderror">
          Relativa
        </label>
        </div>
      <div class="radio">
        <label for="radios-14">
          <input type="radio" name="CO_1_P5" id="radios-14" value="3" class="@error('CO_1_P5') is-invalid @enderror">
          Ninguna facilidad
        </label>
        </div>
      </div>
      @error('CO_1_P5')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h4>2. USO DE CONOCIMIENTOS</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
        <label class="col-md-12 control-label" for="radios">En el desarrollo de la asignatura</label>
      <label class="col-md-12 control-label" for="radios">El docente, demuestra el uso de la totalidad de sus conocimientos</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-15">
          <input type="radio" name="CO_2_P1" id="radios-15" value="1" class="@error('CO_2_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-16">
          <input type="radio" name="CO_2_P1" id="radios-16" value="2" class="@error('CO_2_P1') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-17">
          <input type="radio" name="CO_2_P1" id="radios-17" value="3" class="@error('CO_2_P1') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CO_2_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">Utiliza distintos criterios o ejemplos para explicar la misma idea</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-18">
          <input type="radio" name="CO_2_P2" id="radios-18" value="1" class="@error('CO_2_P2') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-19">
          <input type="radio" name="CO_2_P2" id="radios-19" value="2" class="@error('CO_2_P2') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-20">
          <input type="radio" name="CO_2_P2" id="radios-20" value="3" class="@error('CO_2_P2') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CO_2_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente demuestra preocupación sobre la formacion del alumno</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-21">
          <input type="radio" name="CO_2_P3" id="radios-21" value="1" class="@error('CO_2_P3') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-22">
          <input type="radio" name="CO_2_P3" id="radios-22" value="2" class="@error('CO_2_P3') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-23">
          <input type="radio" name="CO_2_P3" id="radios-23" value="3" class="@error('CO_2_P3') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CO_2_P3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente es exigente consigo mismo</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-24">
          <input type="radio" name="CO_2_P4" id="radios-24" value="1" class="@error('CO_2_P4') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-25">
          <input type="radio" name="CO_2_P4" id="radios-25" value="2" class="@error('CO_2_P4') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-26">
          <input type="radio" name="CO_2_P4" id="radios-26" value="3" class="@error('CO_2_P4') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CO_2_P4')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente es exigente con el estudiante</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-27">
          <input type="radio" name="CO_2_P5" id="radios-27" value="1" class="@error('CO_2_P5') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-28">
          <input type="radio" name="CO_2_P5" id="radios-28" value="2" class="@error('CO_2_P5') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-29">
          <input type="radio" name="CO_2_P5" id="radios-29" value="3" class="@error('CO_2_P5') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CO_2_P5')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h4>3. ACTUALIZACION DE CONOCIMIENTOS</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente, demuestra que utiliza información actualizada en el desarrollo de su clase</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-30">
          <input type="radio" name="CO_3_P1" id="radios-30" value="1" class="@error('CO_3_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-31">
          <input type="radio" name="CO_3_P1" id="radios-31" value="2" class="@error('CO_3_P1') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-32">
          <input type="radio" name="CO_3_P1" id="radios-32" value="3" class="@error('CO_3_P1') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CO_3_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">Los ejemplos utilizados, tienen que ver con los avances de la ciencia y la tecnología, o la realidad actual</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-33">
          <input type="radio" name="CO_3_P2" id="radios-33" value="1" class="@error('CO_3_P2') is-invalid @enderror">
          Si
        </label>
        </div>
      <div class="radio">
        <label for="radios-34">
          <input type="radio" name="CO_3_P2" id="radios-34" value="2" class="@error('CO_3_P2') is-invalid @enderror">
          No
        </label>
        </div>
      </div>
      @error('CO_3_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">En el desarrollo de la gestión académica el docente sugiere al alumno, nueva bibliografia</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-35">
          <input type="radio" name="CO_3_P3" id="radios-35" value="1" class="@error('CO_3_P3') is-invalid @enderror">
          Si
        </label>
        </div>
      <div class="radio">
        <label for="radios-36">
          <input type="radio" name="CO_3_P3" id="radios-36" value="2" class="@error('CO_3_P3') is-invalid @enderror">
          No
        </label>
        </div>
      </div>
      @error('CO_3_P3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h1>CUALIDADES PEDAGOGICAS</h1></b>
    <b><h4>1. PLANIFICACION</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente hace conocer los objetivos de la clase</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-37">
          <input type="radio" name="CUA_1_P1" id="radios-37" value="1" class="@error('CUA_1_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-38">
          <input type="radio" name="CUA_1_P1" id="radios-38" value="2" class="@error('CUA_1_P1') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-39">
          <input type="radio" name="CUA_1_P1" id="radios-39" value="3" class="@error('CUA_1_P1') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_1_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente presenta, la información de manera organizada</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-40">
          <input type="radio" name="CUA_1_P2" id="radios-40" value="1" class="@error('CUA_1_P2') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-41">
          <input type="radio" name="CUA_1_P2" id="radios-41" value="2" class="@error('CUA_1_P2') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-42">
          <input type="radio" name="CUA_1_P2" id="radios-42" value="3" class="@error('CUA_1_P2') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_1_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente luego de transcurrida la clase, realiza una síntesis de la misma</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-43">
          <input type="radio" name="CUA_1_P3" id="radios-43" value="1" class="@error('CUA_1_P3') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-44">
          <input type="radio" name="CUA_1_P3" id="radios-44" value="2" class="@error('CUA_1_P3') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-45">
          <input type="radio" name="CUA_1_P3" id="radios-45" value="3" class="@error('CUA_1_P3') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_1_P3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h4>2. MOTIVACION</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente presenta, el tema en forma motivadora</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-46">
          <input type="radio" name="CUA_2_P1" id="radios-46" value="1" class="@error('CUA_2_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-47">
          <input type="radio" name="CUA_2_P1" id="radios-47" value="2" class="@error('CUA_2_P1') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-48">
          <input type="radio" name="CUA_2_P1" id="radios-48" value="3" class="@error('CUA_2_P1') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_2_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente, intercala en la exposición algunas preguntas que estimulen la atención</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-49">
          <input type="radio" name="CUA_2_P2" id="radios-49" value="1" class="@error('CUA_2_P2') is-invalid @enderror">
          Si
        </label>
        </div>
      <div class="radio">
        <label for="radios-50">
          <input type="radio" name="CUA_2_P2" id="radios-50" value="2" class="@error('CUA_2_P2') is-invalid @enderror">
          Frecuentemente
        </label>
        </div>
      <div class="radio">
        <label for="radios-51">
          <input type="radio" name="CUA_2_P2" id="radios-51" value="3" class="@error('CUA_2_P2') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_2_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente dirige preguntas al auditorio</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-52">
          <input type="radio" name="CUA_2_P3" id="radios-52" value="1" class="@error('CUA_2_P3') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-53">
          <input type="radio" name="CUA_2_P3" id="radios-53" value="2" class="@error('CUA_2_P3') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-54">
          <input type="radio" name="CUA_2_P3" id="radios-54" value="3" class="@error('CUA_2_P3') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_2_P3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente mantiene interesado al auditorio</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-55">
          <input type="radio" name="CUA_2_P4" id="radios-55" value="1" class="@error('CUA_2_P4') is-invalid @enderror">
          Si
        </label>
        </div>
      <div class="radio">
        <label for="radios-56">
          <input type="radio" name="CUA_2_P4" id="radios-56" value="2" class="@error('CUA_2_P4') is-invalid @enderror">
          No
        </label>
        </div>
      </div>
      @error('CUA_2_P4')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h4>3. DIALOGO</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">En el desarrollo de la clase, el docente:</label>
      <label class="col-md-12 control-label" for="radios">Acepta criterios distintos a los de su exposición:</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-57">
          <input type="radio" name="CUA_3_P1" id="radios-57" value="1" class="@error('CUA_3_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-58">
          <input type="radio" name="CUA_3_P1" id="radios-58" value="2" class="@error('CUA_3_P1') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-59">
          <input type="radio" name="CUA_3_P1" id="radios-59" value="3" class="@error('CUA_3_P1') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_3_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente, en su trabajo de aula</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-60">
          <input type="radio" name="CUA_3_P2" id="radios-60" value="1" class="@error('CUA_3_P2') is-invalid @enderror">
          Siempre dialoga con los estudiantes
        </label>
        </div>
      <div class="radio">
        <label for="radios-61">
          <input type="radio" name="CUA_3_P2" id="radios-61" value="2" class="@error('CUA_3_P2') is-invalid @enderror">
          Dialoga alguna vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-62">
          <input type="radio" name="CUA_3_P2" id="radios-62" value="3" class="@error('CUA_3_P2') is-invalid @enderror">
          Nunca dialoga
        </label>
        </div>
      </div>
      @error('CUA_3_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">Cuando se le interroga al docente</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-63">
          <input type="radio" name="CUA_3_P3" id="radios-63" value="1" class="@error('CUA_3_P3') is-invalid @enderror">
          Responde
        </label>
        </div>
      <div class="radio">
        <label for="radios-64">
          <input type="radio" name="CUA_3_P3" id="radios-64" value="2" class="@error('CUA_3_P3') is-invalid @enderror">
          Se molesta
        </label>
        </div>
      <div class="radio">
        <label for="radios-65">
          <input type="radio" name="CUA_3_P3" id="radios-65" value="3" class="@error('CUA_3_P3') is-invalid @enderror">
          Es indiferente
        </label>
        </div>
      </div>
      @error('CUA_3_P3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">Al finalizar la clase y a requerimiento de los alumnos, el docente</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-66">
          <input type="radio" name="CUA_3_P4" id="radios-66" value="1" class="@error('CUA_3_P4') is-invalid @enderror">
          Aclara dudas a los estudiantes
        </label>
        </div>
      <div class="radio">
        <label for="radios-67">
          <input type="radio" name="CUA_3_P4" id="radios-67" value="2" class="@error('CUA_3_P4') is-invalid @enderror">
          No presta atención al requerimiento
        </label>
        </div>
      <div class="radio">
        <label for="radios-68">
          <input type="radio" name="CUA_3_P4" id="radios-68" value="3" class="@error('CUA_3_P4') is-invalid @enderror">
          Se marcha
        </label>
        </div>
      </div>
      @error('CUA_3_P4')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente en clase, impone sus criterios</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-69">
          <input type="radio" name="CUA_3_P5" id="radios-69" value="1" class="@error('CUA_3_P5') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-70">
          <input type="radio" name="CUA_3_P5" id="radios-70" value="2" class="@error('CUA_3_P5') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-71">
          <input type="radio" name="CUA_3_P5" id="radios-71" value="3" class="@error('CUA_3_P5') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_3_P5')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h4>4. METODO</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">En su criterio, el docente, a lo largo de su exposición refuerza los datos más significativos</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-72">
          <input type="radio" name="CUA_4_P1" id="radios-72" value="1" class="@error('CUA_4_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-73">
          <input type="radio" name="CUA_4_P1" id="radios-73" value="2" class="@error('CUA_4_P1') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-74">
          <input type="radio" name="CUA_4_P1" id="radios-74" value="3" class="@error('CUA_4_P1') is-invalid @enderror">
          Rara vez
        </label>
        </div>
      <div class="radio">
        <label for="radios-75">
          <input type="radio" name="CUA_4_P1" id="radios-75" value="4" class="@error('CUA_4_P1') is-invalid @enderror">
          Nunca
        </label>
        </div>
      </div>
      @error('CUA_4_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente, en su exposición es</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-76">
          <input type="radio" name="CUA_4_P2" id="radios-76" value="1" class="@error('CUA_4_P2') is-invalid @enderror">
          Muy claro
        </label>
        </div>
      <div class="radio">
        <label for="radios-77">
          <input type="radio" name="CUA_4_P2" id="radios-77" value="2" class="@error('CUA_4_P2') is-invalid @enderror">
          Poco claro
        </label>
        </div>
      <div class="radio">
        <label for="radios-78">
          <input type="radio" name="CUA_4_P2" id="radios-78" value="3" class="@error('CUA_4_P2') is-invalid @enderror">
          Nada claro
        </label>
        </div>
      </div>
      @error('CUA_4_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">Ud., cree que el docente utiliza</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-79">
          <input type="radio" name="CUA_4_P3" id="radios-79" value="1" class="@error('CUA_4_P3') is-invalid @enderror">
          Un buen método de enseñanza
        </label>
        </div>
      <div class="radio">
        <label for="radios-80">
          <input type="radio" name="CUA_4_P3" id="radios-80" value="2" class="@error('CUA_4_P3') is-invalid @enderror">
          Un método aceptable
        </label>
        </div>
      <div class="radio">
        <label for="radios-81">
          <input type="radio" name="CUA_4_P3" id="radios-81" value="3" class="@error('CUA_4_P3') is-invalid @enderror">
          Un método poco aceptable
        </label>
        </div>
      </div>
      @error('CUA_4_P3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h1>CUMPLIMIENTO</h1></b>
    <b><h4>1. ASISTENCIA</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente cumple con los horarios establecidos</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-82">
          <input type="radio" name="CUM_1_P1" id="radios-82" value="1" class="@error('CUM_1_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-83">
          <input type="radio" name="CUM_1_P1" id="radios-83" value="2" class="@error('CUM_1_P1') is-invalid @enderror">
          Casi siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-84">
          <input type="radio" name="CUM_1_P1" id="radios-84" value="3" class="@error('CUM_1_P1') is-invalid @enderror">
          No cumple
        </label>
        </div>
      </div>
      @error('CUM_1_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <b><h4>2. EXAMENES</h4></b>
    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente devuelve los examenes oportunamente</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-85">
          <input type="radio" name="CUM_2_P1" id="radios-85" value="1" class="@error('CUM_2_P1') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-86">
          <input type="radio" name="CUM_2_P1" id="radios-86" value="2" class="@error('CUM_2_P1') is-invalid @enderror">
          A veces
        </label>
        </div>
      <div class="radio">
        <label for="radios-87">
          <input type="radio" name="CUM_2_P1" id="radios-87" value="3" class="@error('CUM_2_P1') is-invalid @enderror">
          Casi nunca
        </label>
        </div>
      </div>
      @error('CUM_2_P1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="radios">El docente resuelve y/o analiza los examenes</label>
      <div class="col-md-12">
      <div class="radio">
        <label for="radios-88">
          <input type="radio" name="CUM_2_P2" id="radios-88" value="1" class="@error('CUM_2_P2') is-invalid @enderror">
          Siempre
        </label>
        </div>
      <div class="radio">
        <label for="radios-89">
          <input type="radio" name="CUM_2_P2" id="radios-89" value="2" class="@error('CUM_2_P2') is-invalid @enderror">
          A veces
        </label>
        </div>
      <div class="radio">
        <label for="radios-90">
          <input type="radio" name="CUM_2_P2" id="radios-90" value="3" class="@error('CUM_2_P2') is-invalid @enderror">
          Casi nunca
        </label>
        </div>
      </div>
      @error('CUM_2_P2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <button class="btn btn-primary">Enviar</button>

    </fieldset>

    </form>
@endsection
