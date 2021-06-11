<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{

    public function storeCuestionario()
    {
        if (session()->has('userStudent')) {
            $this->validar(request());
            $respuesta = request()->all();
            Respuesta::create($respuesta);
            $dato = Dato::find($respuesta['iddato']);
            session()->put($dato['sigla'], $dato['codigo']);
            return redirect('cuestionario-llenado');
        } else {
            return redirect('login-student');
        }
    }

    public function cuestionarioLlenado()
    {
        if (session()->has('userStudent')) {
            $dato = Dato::find(session()->has('userStudent'));
            if (session()->has($dato['sigla'])) {
                return view('cuestionario.cuestionario-llenado');
            } else {
                return redirect('get-cuestionario/'.$dato['id']);
            }
        } else {
            return redirect('login-student');
        }
    }

    public function notaDelete()
    {
        Respuesta::get()->delete();
        return redirect('docentes');
    }

    protected function validar(Request $request)
    {
        $this->validate($request, [
            'iddato' => 'required',
            'CO_1_P1' => 'required',
            'CO_1_P2' => 'required',
            'CO_1_P3' => 'required',
            'CO_1_P4' => 'required',
            'CO_1_P5' => 'required',
            'CO_2_P1' => 'required',
            'CO_2_P2' => 'required',
            'CO_2_P3' => 'required',
            'CO_2_P4' => 'required',
            'CO_2_P5' => 'required',
            'CO_3_P1' => 'required',
            'CO_3_P2' => 'required',
            'CO_3_P3' => 'required',
            'CUA_1_P1' => 'required',
            'CUA_1_P2' => 'required',
            'CUA_1_P3' => 'required',
            'CUA_2_P1' => 'required',
            'CUA_2_P2' => 'required',
            'CUA_2_P3' => 'required',
            'CUA_2_P4' => 'required',
            'CUA_3_P1' => 'required',
            'CUA_3_P2' => 'required',
            'CUA_3_P3' => 'required',
            'CUA_3_P4' => 'required',
            'CUA_3_P5' => 'required',
            'CUA_4_P1' => 'required',
            'CUA_4_P2' => 'required',
            'CUA_4_P3' => 'required',
            'CUM_1_P1' => 'required',
            'CUM_2_P1' => 'required',
            'CUM_2_P2' => 'required'
        ]);
    }
}
