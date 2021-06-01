<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    public function getCuestionario(){
        //return view('cuestionario.cuestionario');
    }

    public function storeCuestionario(){
        $this->validar(request());
        $respuesta=request()->all();
        Respuesta::create($respuesta);
        return view('cuestionario.cuestionario-llenado');
    }

    protected function validar(Request $request){
        $this->validate($request,[
            'iddato'=>'required',
            'CO_1_P1'=>'required',
            'CO_1_P2'=>'required',
            'CO_1_P3'=>'required',
            'CO_1_P4'=>'required',
            'CO_1_P5'=>'required',
            'CO_2_P1'=>'required',
            'CO_2_P2'=>'required',
            'CO_2_P3'=>'required',
            'CO_2_P4'=>'required',
            'CO_2_P5'=>'required',
            'CO_3_P1'=>'required',
            'CO_3_P2'=>'required',
            'CO_3_P3'=>'required',
            'CUA_1_P1'=>'required',
            'CUA_1_P2'=>'required',
            'CUA_1_P3'=>'required',
            'CUA_2_P1'=>'required',
            'CUA_2_P2'=>'required',
            'CUA_2_P3'=>'required',
            'CUA_2_P4'=>'required',
            'CUA_3_P1'=>'required',
            'CUA_3_P2'=>'required',
            'CUA_3_P3'=>'required',
            'CUA_3_P4'=>'required',
            'CUA_3_P5'=>'required',
            'CUA_4_P1'=>'required',
            'CUA_4_P2'=>'required',
            'CUA_4_P3'=>'required',
            'CUM_1_P1'=>'required',
            'CUM_2_P1'=>'required',
            'CUM_2_P2'=>'required'
        ]);
    }
}
