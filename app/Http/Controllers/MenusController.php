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
    public function index(Request $request)
    {
        //
        $productos = Productos::where('id_negocio',$request->user()->id_negocio)->get();
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
                'id_negocio'=>$request->user()->id_negocio
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
            //dd($th);
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
    public function edit(Request $request)
    {
        //
        $productos = Productos::where('id_negocio',$request->user()->id_negocio)->get();
        $combos = Combos::all();
        $sucursales = Sucursal::all();
        $menu = Menus::find($request['id']);
        $productoMenu = MenusProductos::where('id_menu',$request['id'])->get();
        $combosMenu = MenusCombos::where('id_menu',$request['id'])->get();

        foreach($productoMenu as $item){
            $item->producto = Productos::find($item->id_producto);
        }

        foreach($combosMenu as $item){
            $item->combo = Combos::find($item->id_combo);
        }
        return view('menus.editar',['productos'=>$productos,'combos'=>$combos,'sucursales'=>$sucursales,'menu'=>$menu,'menuCombos'=>$combosMenu,'menuProductos'=>$productoMenu,'success'=>0]);
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
        Menus::where('id',$request['id'])->update([
            'nombre'=>$request['nombre'],
        ]);

        $menu = $request['id'];
        $productos = $request['producto'];
        $combos = $request['combos'];
        $sucursales = $request['sucursales'];

        if(count($productos)>0 && $productos[0] != null){
            foreach($productos as $producto){
                MenusProductos::create([
                    'id_menu'=>$menu,
                    'id_producto'=>$producto
                ]);
            }
        }

        if(count($combos)>0 && $combos[0] != null){
            foreach($combos as $item){
                MenusCombos::create([
                    'id_menu'=>$menu,
                    'id_combo'=>$item
                ]);
            }
        }

        if(count($sucursales)>0 && $sucursales[0] != null){
            foreach($sucursales as $item){
                MenusSucursal::create([
                    'id_menu'=>$menu,
                    'id_sucursal'=>$item
                ]);
            }
        }

        $menus = Menus::all();
        return view('menus.menus',['menus'=>$menus]);
    }

    public function deletePmenu(Request $request)
    {
        //
        MenusProductos::where('id',$request['id'])->delete();
        return back();
    }

    public function deleteMenu(Request $request)
    {
        //
        $sucursales = Sucursal::where('menu',$request['id'])->get();
        if(count($sucursales)==0){
            Menus::where('id',$request['id'])->delete();
        }
        return back();
    }

    public function deleteCmenu(Request $request)
    {
        //
        MenusCombos::where('id',$request['id'])->delete();
        return back();
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
