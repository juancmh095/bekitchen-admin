<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use App\Models\MenusSucursal;
use App\Models\Sucursal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = Menus::all();
        return view('sucursales.registro',['menus'=>$menus,'success'=>2]);
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
            $foto = "";
            if($request->file('foto')!=null){
                //obtenemos el campo file definido en el formulario
                $file = $request->file('foto');
                //indicamos que queremos guardar un nuevo archivo en el disco local
                $foto = Storage::disk('public')->put('fotos', $file);
            }
            //dd($request);
            Sucursal::create([
                'logo'=>$foto, 
                'nombre'=>$request['nombre'], 
                'direccion'=>$request['direccion'], 
                'telefono'=>$request['telefono'], 
                'correo'=>$request['correo'], 
                'menu'=>$request['menu'], 
                'lat'=>0, 
                'lng'=>0, 
                'delivery'=>isset($request['delivery']), 
                'tienda'=>isset($request['tienda']), 
                'id_negocio'=>18
            ]);
            $sucursal = Sucursal::latest('id')->first();
            MenusSucursal::create([
                'id_menu'=>$request['menu'],
                'id_sucursal'=>$sucursal->id
            ]);
            //code...
            $menus = Menus::all();
            return view('sucursales.registro',['menus'=>$menus,'success'=>1]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            $menus = Menus::all();
            return view('sucursales.registro',['menus'=>$menus,'success'=>0]);
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
        $sucursales = Sucursal::all();
        return view('sucursales.listado',['sucursales'=>$sucursales]);
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

    public function apiSucursales(Request $request)
    {
        //
        return Sucursal::all();
    }
}
