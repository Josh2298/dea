<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes=Docente::orderBy('nombrecompleto','asc')->paginate(20);
        return view('docente.docente-index',compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.docente-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info=$request->all();
        $info['nombrecompleto']=$info['apellidop']." ".$info['apellidom']." ".$info['nombres'];
        Docente::create($info);
        return redirect('/docentes');
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
        $docente=Docente::find($id);
        return view('docente.docente-edit',compact('docente'));
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
        $docente=Docente::find($id);
        $mod=$request->all();
        $mod['nombrecompleto']=$mod['apellidop']." ".$mod['apellidom']." ".$mod['nombres'];
        $docente->update($mod);
        return redirect('/docentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente=Docente::find($id);
        $docente->delete();
        return redirect('/docentes');
    }

    public function searchDocentes()
    {
        $nombredocente=request()->input('docente');
        $docentes=Docente::where('nombrecompleto','like',"%{$nombredocente}%")->orderBy('nombrecompleto','asc')->paginate(20);

        return view('docente.docente-index',compact('docentes'));
    }
}
