<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Negocio;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class UsuariosController extends Controller
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
        //
        try {
            //registrar usuario admin y negocio
            $idNegocio = 0;
            $foto = "";
            $passwordRdn = "";
            if($request->file('foto')!=null){
                //obtenemos el campo file definido en el formulario
                $file = $request->file('foto');
                //indicamos que queremos guardar un nuevo archivo en el disco local
                $foto = Storage::disk('public')->put('fotos', $file);
            }
            Negocio::create([
                'contacto'=>$request['nombre']." ".$request['apellidop']." ".$request['apellidom'],
                'email'=>$request['email'], 
                'telefono'=>$request['phone'], 
                'nombre_comercial'=>$request['nombre_comercial'], 
                'alias'=>$request['alias'], 
                'tipo'=>'i', 
                'estado'=>$request['Estado'], 
                'pais'=>$request['pais'], 
                'municipio'=>$request['Municipio'], 
                'calle'=>$request['colonia'], 
                'entre'=>$request['entrecalles'], 
                'cp'=>$request['cp'], 
                'foto'=>$foto
            ]);

            $idNegocio = Negocio::latest('id')->first();
            $direccion = $request['colonia']." ".$request['cp']." ".$request['Municipio']." ".$request['Estado'];
            User::create(
                [
                    'nombre'=>$request['nombre'], 
                    'ap_paterno'=>$request['apellidop'], 
                    'ap_materno'=>$request['apellidom'], 
                    'telefono'=>$request['phone'], 
                    'direccion'=>$direccion, 
                    'tipo'=>'admin-tienda', 
                    'foto'=>$foto, 
                    'id_negocio'=>$idNegocio->id, 
                    'email'=>$request['email'], 
                    'password'=>$passwordRdn
                ]
            );

            return view('registro.usuario',['success'=>1]);

        } catch (\Throwable $th) {
            //throw $th;
            return view('registro.usuario',['success'=>2]);
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
