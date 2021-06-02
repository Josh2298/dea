<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;
use Storage;

class AuthController extends Controller
{
    public function authStudentView(){
        if (session()->has('userStudent')) {
            return redirect('get-cuestionario/');
        } else {
            return view('auth.login-student');
        }
    }

    public function authStudent(Request $request){
        $data = $request->all();
        $dato = Dato::where('sigla',$data['cuenta'])->where('codigo', $data['password'])->first();
        if (isset($dato)) {
            if (!session()->has($dato['sigla'])) {
                $request->session()->put('userStudent', $dato['id']);
                return redirect('get-cuestionario/' . $dato['id']);
            } else {
                $failed='Ya llenaste una encuesta para esta materia.';
                return view('auth.login-student-form',compact('failed'));
            }
        } else {
            $failed='Estas credenciales no coinciden con nuestros registros.';
            return view('auth.login-student-form',compact('failed'));
        }
    }

    public function getCuestionario(){
        if (session()->has('userStudent')) {
            $dato = Dato::find(session()->get('userStudent'));
            if (!session()->has($dato['sigla'])) {
                return view('cuestionario.cuestionario', compact('dato'));
            } else {
                return redirect('cuestionario-llenado');
            }
        } else {
            return redirect('login-student');
        }
    }

    public function logoutStudent() {
        if (session()->has('userStudent')) {
            session()->pull('userStudent');
        }
        return redirect('login-student');
    }

    public function authCorreo(){
        return view('auth.login-correo');
    }

    public function authCodigo(){
        $correo=request()->input('correo');
        $codigo=chr(rand(65,90)).rand(0,9).chr(rand(97,122)).chr(rand(65,90)).rand(0,9).chr(rand(97,122)).chr(rand(65,90)).rand(0,9);
        $email['correo']=$correo;
        $email['codigo']=$codigo;
        //$json=[
            //'token'=>'efcd3806180ff7b8bbb1c67f25c6f3c5',
            //'source'=>'',
        //]
        //Email::create($email);
        //Mail::to($correo)->send(new MailableClass);
    }
}
