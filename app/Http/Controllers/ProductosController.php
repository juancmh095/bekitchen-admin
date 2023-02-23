<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\MenusProductos;
use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;


class ProductosController extends Controller
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
        return view('productos.productos',["productos"=>$data]);
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
            //dd($request->file());
            $foto = "";
            if($request->file('foto')!=null){
                //obtenemos el campo file definido en el formulario
                $file = $request->file('foto');
                //indicamos que queremos guardar un nuevo archivo en el disco local
                $foto = Storage::disk('public')->put('fotos', $file);
            }
            Productos::create([
                'nombre'=>$request['productName'], 
                'sku'=>$request['SKU'], 
                'peso'=>$request['weightName'].$request['unidadm'], 
                'precio'=>$request['priceName'], 
                'descripcion'=>isset($request['description'])?$request['description']:'N/A', 
                'categoria'=>$request['categoria'], 
                'etiquetas'=>$request['tagsLabel'], 
                'media'=>$foto, 
                'id_negocio'=>$request->user()->id_negocio,
                'top'=>isset($request['top'])?1:0,
                'mas_comprados'=>isset($request['mas_comprados'])?1:0,
            ]);

            return view('productos.registro',["success"=>1]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return view('productos.registro',["success"=>2]);
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
        $categorias = Categoria::where('id_negocio',$request->user()->id_negocio)->get();
        return view('productos.registro',['success'=>0,"categorias"=>$categorias]);
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
        $id = $request['id'];
        $producto = Productos::find($id);
        $categorias = Categoria::where('id_negocio',$request->user()->id_negocio)->get();
        return view('productos.editar',["success"=>0,"producto"=>$producto,"categorias"=>$categorias]);
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
            //dd($request->all());
            Productos::where('id',$request['id'])->update([
                'nombre'=>$request['productName'], 
                'sku'=>$request['SKU'], 
                'peso'=>$request['weightName'].$request['unidadm'], 
                'precio'=>$request['priceName'], 
                'descripcion'=>isset($request['description'])?$request['description']:'N/A', 
                'categoria'=>$request['categoria'], 
                'etiquetas'=>$request['tagsLabel'], 
                'media'=>$foto, 
                'top'=>isset($request['top'])?1:0,
                'mas_comprados'=>isset($request['mas_comprados'])?1:0,
                'id_negocio'=>$request->user()->id_negocio
            ]);
            $producto = Productos::find($request['id']);
            $categorias = Categoria::where('id_negocio',$request->user()->id_negocio)->get();
            return view('productos.editar',["success"=>1,"producto"=>$producto,"categorias"=>$categorias]);
        } catch (\Throwable $th) {
            //throw $th;
            $data = Productos::all();
            return view('productos.productos',["success"=>2,'productos'=>$data]);
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

    public function apiProductos($negocio)
    {
        //
        $productos = array();
        $pMenu = MenusProductos::where('id_menu','=',$negocio)->get();
        foreach($pMenu as $item){
            $data = Productos::where('id','=',$item->id_producto)->get();
            
            if(count($data) > 0 && !empty($data[0])){
                array_push($productos,$data[0]);
            }
        }
        return $productos;
    }
}
