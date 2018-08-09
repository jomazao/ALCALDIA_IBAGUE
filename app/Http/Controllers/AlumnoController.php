<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\ciudad;
use App\departamento;
use App\institucion;
use Illuminate\Http\Request;
use Auth;

class AlumnoController extends Controller
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
    public function create(Request $request)
    {

        if ($request->has('apellido1') and $request->has('apellido2')  and $request->has('nombre1')  and $request->has('nombre2') and $request->has('tipoDocumentoId')  and $request->has('daneDepartamentoDocumento')  and $request->has('daneCiudadDocumento') and $request->has('daneCiudad')and $request->has('daneInstitucion')and $request->has('numeroDocumento')and $request->has('anio')){
           if(Auth::check()) {
                $apellido1=$request->input('apellido1')
                $apellido2=$request->input('apellido2');
                $nombre1=$request->input('nombre1');
                $nombre2=$request->input('nombre2');
                $tipoDocumentoId=$request->input('tipoDocumentoId');
                $daneDepartamentoDocumento=$request->input('daneDepartamentoDocumento');
                $daneCiudadDocumento=$request->input('daneCiudadDocumento');
                $daneCiudad=$request->input('daneCiudad');
                $daneInstitucion=$request->input('daneInstitucion');
                $numeroDocumento=$request->input('numeroDocumento');
                $anio=$request->input('anio');


                $departamentoDocumentoId=departamento::where('codigo',$daneDepartamentodDocumento)->first();
                $ciudadDocumentoId=ciudad::where('codigo',$daneCiudadDocumento)->first();
                $ciudad=ciudad::where('codigo',$daneCiudad)->first();
                $institucionId=institucion::where('codigo',$daneInstitucion)->first();
                $alumno=new Alumno;
                $alumno->apellido1=$apellido1;
                $alumno->apellido2=$apellido2;
                $alumno->nombre1=$nombre1;
                $alumno->nombre2=$nombre2;
                $alumno->tipoDocumentoId=$tipoDocumentoId;
                


                $alumno->save();


                  return response();
            }else{
                 return  response('Mp autorizado para esta operación', 401);
            }


        }else{
              return  response('Faltan datos por ingresar', 401);
        }

 


  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
