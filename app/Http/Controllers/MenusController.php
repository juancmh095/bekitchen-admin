<?php

namespace App\Http\Controllers;

use App\Models\Combos;
use App\Models\Menus;
use App\Models\MenusCombos;
use App\Models\MenusProductos;
use App\Models\MenusSucursal;
use App\Models\Productos;
use App\Models\Sucursal;
use Illuminate\Http\Request;


class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Productos::all();
        $combos = Combos::all();
        $sucursales = Sucursal::all();
        return view('menus.registro',['productos'=>$productos,'combos'=>$combos,'sucursales'=>$sucursales,'success'=>2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //dd($request);
        try {
            //code...
            Menus::create([
                'nombre'=>$request['nombre'],
                'id_negocio'=>18
            ]);
            $menu = Menus::latest('id')->first();
            $productos = $request['producto'];
            $combos = $request['combos'];
            $sucursales = $request['sucursales'];

            if(count($productos)>0 && $productos[0] != null){
                foreach($productos as $producto){
                    MenusProductos::create([
                        'id_menu'=>$menu->id,
                        'id_producto'=>$producto
                    ]);
                }
            }

            if(count($combos)>0 && $combos[0] != null){
                foreach($combos as $item){
                    MenusCombos::create([
                        'id_menu'=>$menu->id,
                        'id_combo'=>$item
                    ]);
                }
            }

            if(count($sucursales)>0 && $sucursales[0] != null){
                foreach($sucursales as $item){
                    MenusSucursal::create([
                        'id_menu'=>$menu->id,
                        'id_sucursal'=>$item
                    ]);
                }
            }

            $productos = Productos::all();
            $combos = Combos::all();
            $sucursales = Sucursal::all();
            return view('menus.registro',['productos'=>$productos,'combos'=>$combos,'sucursales'=>$sucursales,'success'=>1]);

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
        $menus = Menus::all();
        return view('menus.menus',['menus'=>$menus]);
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
