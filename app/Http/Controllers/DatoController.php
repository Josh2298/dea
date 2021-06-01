<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\Docente;
use App\Models\Respuesta;
use App\Models\User;
use Illuminate\Http\Request;

class DatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato=$request->all();
        $id=$dato['iddo'];
        $random_string=chr(rand(65,90)).chr(rand(97,122)).chr(rand(65,90)).chr(rand(97,122)).chr(rand(65,90)).rand(0,9).rand(0,9).rand(0,9);
        $dato['codigo']=$random_string;
        Dato::create($dato);
        return redirect('materias/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia=Dato::find($id);
        return view('materia.materia-edit',compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $materia=$request->all();
        $materiaAnterior=Dato::find($id);
        $materiaAnterior->update($materia);
        return redirect('/materias/'.$materiaAnterior['iddo']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia=Dato::find($id);
        $materia->delete();
        return redirect('/materias/'.$materia['iddo']);
    }

    public function createm($id)
    {
        $docente=Docente::find($id);
        return view('materia.materia-create',compact('docente'));
    }

    public function materiaIndex($id)
    {
        $docente=Docente::find($id);
        $materias=Dato::where('iddo',$id)->get();
        return view('materia.materia-docente-index',compact('docente','materias'));
    }

    public function materiaNota($id)
    {
        $notas=Respuesta::where('iddato',$id)->get();
        $materia=Dato::find($id);
        $docente=Docente::find($materia['iddo']);

        return view('materia.materia-nota',compact('notas','docente'));

    }

    public function codigo(Request $request)
    {
        $dato=$request->all();
        $id=$dato['id'];
        $random_string=chr(rand(65,90)).chr(rand(97,122)).chr(rand(65,90)).chr(rand(97,122)).chr(rand(65,90)).rand(0,9).rand(0,9).rand(0,9);
        $dato['codigo']=$random_string;
        $codigo=Dato::find($id);
        $codigo->update($dato);
        return redirect('materias/'.$id);
    }
}
