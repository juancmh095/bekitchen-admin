<?php

namespace App\Http\Controllers;

use App\Models\Combos;
use App\Models\CombosProductos;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CombosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Productos::all();
        return view('combos.registro',["productos"=>$data]);
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
            $foto = "";
            if($request->file('foto')!=null){
                //obtenemos el campo file definido en el formulario
                $file = $request->file('foto');
                //indicamos que queremos guardar un nuevo archivo en el disco local
                $foto = Storage::disk('public')->put('fotos', $file);
            }
            $productos = $request['producto'];
            $precios = $request['precios'];
            array_pop($productos);
            array_pop($precios);
            $total = 0;
            foreach ($productos as $key => $value) {
                # code...
                if($precios[$key]){
                    $total = $total + $precios[$key];
                }else{
                    $p = Productos::find($value);
                    $total = $total + $p->precio;
                }
            }
            //dd($total);
            Combos::create([
                'nombre'=>$request['nombre'],
                'banner'=>$foto,
                'precio_total'=>$total,
                'fecha_exp'=>$request['fecha'],
                'id_negocio'=>$request->user()->id_negocio
            ]);
            $combo = Combos::latest('id')->first();
            //dd($combo->id);
            $precio = 0;
            foreach ($productos as $key => $value) {
                if($precios[$key]){
                    $precio = $precios[$key];
                }else{
                    $p = Productos::find($value);
                    $precio = $p->precio;
                }
                CombosProductos::create([
                    'id_combo'=>$combo->id,
                    'id_producto'=>$value,
                    'precio'=>$precio
                ]);
            }
            $data = Productos::all();
            return view('combos.registro',["productos"=>$data,"success"=>1]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return back()->with(['success'=>0]);
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
        $data = Combos::all();
        return view('combos.combos',["combos"=>$data]);
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

    public function combosApi()
    {
        //
        $data = Combos::all();
        return $data;
    }
    public function combosApiId($id)
    {
        //
        $data = Combos::where('id_negocio',$id)->get();
        return $data;
    }
}
