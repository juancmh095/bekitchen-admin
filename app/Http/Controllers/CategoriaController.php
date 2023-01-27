<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = Categoria::where('id_negocio',$request->user()->id_negocio)->get();
        return view('productos.categorias',['categorias'=>$data]);
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
            Categoria::create([
                'nombre'=>$request['nombre'],
                'id_negocio'=> $request->user()->id_negocio
            ]);
            $data = Categoria::where('id_negocio',$request->user()->id_negocio)->get();
            return view('productos.categorias',['categorias'=>$data,'success'=>1]);
        } catch (\Throwable $th) {
            //throw $th;
            $data = Categoria::where('id_negocio',$request->user()->id_negocio)->get();
            return view('productos.categorias',['categorias'=>$data,'success'=>1]);
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
    public function destroy(Request $request)
    {
        //
        Categoria::find($request['id'])->delete();
        $data = Categoria::where('id_negocio',$request->user()->id_negocio)->get();
        return view('productos.categorias',['categorias'=>$data]);
    }
}