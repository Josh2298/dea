<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\Email;
use Illuminate\Http\Request;
use GuzzleHttp;
use Storage;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function authStudent(Request $request){
        $data = $request->all();
        $dato = Dato::where('sigla',$data['cuenta'])->where('codigo', $data['password'])->first();
        if (isset($dato)) {
            return redirect('get-cuestionario/'.$dato['id']);
        } else {
            $failed='Estas credenciales no coinciden con nuestros registros.';
            return view('auth.login-student-form',compact('failed'));
        }
    }

    public function getCuestionario($id){
        $dato = Dato::find($id);
        return view('cuestionario.cuestionario', compact('dato'));
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
