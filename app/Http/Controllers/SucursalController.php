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
        return view('sucursales.registro',['menus'=>$menus,'success'=>0]);
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
            //dd($request);
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
                'menu'=>0, 
                'lat'=>$request['lat'], 
                'lng'=>$request['lng'], 
                'delivery'=>isset($request['delivery']), 
                'tienda'=>isset($request['tienda']), 
                'lunes'=> json_encode($request['lunes']),
                'martes'=> json_encode($request['martes']),
                'miercoles'=> json_encode($request['miercoles']),
                'jueves'=> json_encode($request['jueves']),
                'viernes'=> json_encode($request['viernes']),
                'sabado'=> json_encode($request['sabado']),
                'domingo'=> json_encode($request['domingo']),
                'id_negocio'=>$request->user()->id_negocio
            ]);
            $sucursal = Sucursal::latest('id')->first();
            
            //code...
            $menus = Menus::all();
            return view('sucursales.registro',['menus'=>$menus,'success'=>1]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            $menus = Menus::all();
            return view('sucursales.registro',['menus'=>$menus,'success'=>2]);
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
    public function edit(Request $request)
    {
        //
        $sucursal = Sucursal::find($request['id']);
        //dd($sucursal);
        $sucursal->lunes = json_decode($sucursal->lunes);
        $sucursal->martes = json_decode($sucursal->martes);
        $sucursal->miercoles = json_decode($sucursal->miercoles);
        $sucursal->jueves = json_decode($sucursal->jueves);
        $sucursal->viernes = json_decode($sucursal->viernes);
        $sucursal->sabado = json_decode($sucursal->sabado);
        $sucursal->domingo = json_decode($sucursal->domingo);
        $menus = Menus::all();
        return view('sucursales.editar',['menus'=>$menus,'success'=>0,'suc'=>$sucursal]);
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
        try {
            $foto = $request['img'];
            if($request->file('foto')!=null){
                //obtenemos el campo file definido en el formulario
                $file = $request->file('foto');
                //indicamos que queremos guardar un nuevo archivo en el disco local
                $foto = Storage::disk('public')->put('fotos', $file);
            }
            Sucursal::where('id',$request['id'])->update([
                'logo'=>$foto, 
                'nombre'=>$request['nombre'], 
                'direccion'=>$request['direccion'], 
                'telefono'=>$request['telefono'], 
                'correo'=>$request['correo'], 
                'lat'=>$request['lat'], 
                'lng'=>$request['lng'], 
                'delivery'=>isset($request['delivery']), 
                'tienda'=>isset($request['tienda']),
                'lunes'=> json_encode($request['lunes']),
                'martes'=> json_encode($request['martes']),
                'miercoles'=> json_encode($request['miercoles']),
                'jueves'=> json_encode($request['jueves']),
                'viernes'=> json_encode($request['viernes']),
                'sabado'=> json_encode($request['sabado']),
                'domingo'=> json_encode($request['domingo']),
            ]);
            
            
            //code...
            $sucursales = Sucursal::all();
            return view('sucursales.listado',['sucursales'=>$sucursales]);
        } catch (\Throwable $th) {
            //throw $th;
            $sucursales = Sucursal::all();
            return view('sucursales.listado',['sucursales'=>$sucursales,'success'=>2]);;
        }
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
