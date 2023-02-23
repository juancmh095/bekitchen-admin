<?php

namespace App\Http\Controllers;

use App\Models\Negocio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NegocioController extends Controller
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
    public function edit(Request $request)
    {
        //
        $id = $request->user()->id_negocio;
        $negocio = Negocio::find($id);

        return view('negocio.perfil',['negocio'=>$negocio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //code...
            //dd($request->file());
            $foto = "";
            if($request->file('foto')!=null){
                //obtenemos el campo file definido en el formulario
                $file = $request->file('foto');
                //indicamos que queremos guardar un nuevo archivo en el disco local
                $foto = Storage::disk('public')->put('fotos', $file);
            }else{
                $foto = $request['media'];
            }
            Negocio::where('id',$request->user()->id_negocio)->update([
                'email'=>$request['email'], 
                'telefono'=>$request['telefono'], 
                'nombre_comercial'=>$request['nombre_comercial'], 
                'alias'=>$request['alias'], 
                'costo_envio'=>$request['costo_envio'], 
                'foto'=>$foto,
                'facebook'=>$request['facebook'], 
                'twitter'=>$request['twitter'], 
                'instagram'=>$request['instagram'], 
                'tiktok'=>$request['tiktok']
            ]);

            $id = $request->user()->id_negocio;
            $negocio = Negocio::find($id);

            return view('negocio.perfil',['negocio'=>$negocio]);
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
