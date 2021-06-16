@extends('layouts.app')
@section('contenido')
    <form action="{{url('datos')}}" method="post" enctype="multipart/form-data" name="f1">
        @csrf
        <h5 class="modal-title" id="staticBackdropLabel">Materia</h5>
        <div class="form-row">

            <input type="hidden" required name="iddo" placeholder="" value="{{$docente->id}}" id="txtiddo" require="">

            <div class="mt-3 col-md-12">
                <label for="txtfacultad">Facultad:</label>
                <select class="form-control" name="facultad" id="txtfacultad" onchange="cambia_carrera()">
                    <option value="0" selected>-</option>
                    <option value="1">Facultad Nacional de Ingenieria</option>
                    <option value="2">Facultad de Derecho Ciencias Politicas y Sociales</option>
                    <option value="3">Facultad de Ciencias Economicas Financieras y Administrativas</option>
                    <option value="4">Facultad de Ciencias Agrarias y Naturales</option>
                    <option value="5">Facultad de Arquitectura y Urbanismo</option>
                    <option value="6">Facultad de Ciencias de la Salud</option>
                    <option value="7">Facultad Tecnica</option>
                </select>
                <div class="invalid-feedback">
                </div>

            </div>

            <div class="form-group col-md-12">
                <label for="txtcarrera">Carrera:</label>
                <select class="form-control" name="carrera" placeholder="" id="txtcarrera" require="">
                    <option value=->-</option>
                </select>
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="form-group col-md-12">
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
<script>
    var carreras_1=new Array("-","Ingenieria de Minas","Ingenieria Civil","Ingenieria Metalúrgica","Ingenieria Mecánica","Ingenieria Eléctrica","Ingenieria Química","Ingenieria Geológica","Ingenieria de Sistemas e Informatica","Ingenieria Industrial","Departamento de Matematica","Departamento de Fisica","Departamento de Quimica");
    var carreras_2=new Array("-","Derecho","Ciencias de la Comunicación Social","Antropología","Psicología");
    var carreras_3=new Array("-","Economia","Contaduría Publica","Administración de Empresas","Ingeniería Comercial","Administración Financiera","Comercio Internacional");
    var carreras_4=new Array("-","Ingeniería agronómica","Ingeniería en Zootécnica y Bienestar Animal","Ingeniería en Producción Agraria","Ingeniería en Recursos Naturales Agroambiental","Medicina Veterinaria y Zootécnia(Challapata)","Ingeniería Agroindustrial");
    var carreras_5=new Array("-","");
    var carreras_6=new Array("-","Medicina","Enfermería","Odontología","PATEI","Enfermería Técnico");
    var carreras_7=new Array("-","");

    var todasCarreras = [
      [],
      carreras_1,
      carreras_2,
      carreras_3,
      carreras_4,
      carreras_5,
      carreras_6,
      carreras_7,
    ];

    function cambia_carrera(){
         //tomo el valor del select de facultad elegido
         var facultad
         facultad = document.f1.facultad[document.f1.facultad.selectedIndex].value
         //miro a ver si el facultad está definido
         if (facultad != 0) {
            //si estaba definido, entonces coloco las opciones de la carrera correspondiente.
            //selecciono el array de carrera adecuado
            mis_carreras=todasCarreras[facultad]
            //calculo el numero de carreras
            num_carreras = mis_carreras.length
            //marco el número de carreras en el select
            document.f1.carrera.length = num_carreras
            //para cada carrera del array, la introduzco en el select
            for(i=0;i<num_carreras;i++){
               document.f1.carreraa.options[i].value=mis_carreras[i]
               document.f1.carreraa.options[i].text=mis_carreras[i]
            }
         }else{
            //si no había carrera seleccionada, elimino las carreras del select
            document.f1.carrera.length = 1
            //coloco un guión en la única opción que he dejado
            document.f1.carrera.options[0].value = "-"
            document.f1.carrera.options[0].text = "-"
         }
         //marco como seleccionada la opción primera de carrera
         document.f1.carrera.options[0].selected = true
  }

</script>
