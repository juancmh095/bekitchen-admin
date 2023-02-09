<?php

namespace App\Http\Controllers;

use App\Models\Cupones;
use Illuminate\Http\Request;

class CuponesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = Cupones::where('id_negocio',$request->user()->id_negocio)->get();
        return view('cupones.registro',['cupones'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        try {
            //code...
            Cupones::create([
                'porcentaje'=>$request['porcentaje'],
                'importe'=>$request['importe'], 
                'limite_fecha'=>$request['fecha'],
                'canjes'=>$request['canjes'],
                'codigo'=>$request['nombre'],
                'importe_minimo'=>$request['importe_minimo'],
                'id_negocio'=> $request->user()->id_negocio
            ]);
            $data = Cupones::where('id_negocio',$request->user()->id_negocio)->get();
            return view('cupones.registro',['cupones'=>$data,'success'=>1]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            $data = Cupones::where('id_negocio',$request->user()->id_negocio)->get();
            return view('cupones.registro',['cupones'=>$data,'success'=>0]);
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
        //
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
        //
    }

    public function getCuponList()
    {
        //
        return Cupones::all();
    }

    public function getCupon($id)
    {
        //
        return Cupones::where('codigo',$id)->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
