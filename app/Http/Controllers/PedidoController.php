<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Sucursal;
use App\Models\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = Pedidos::all();
        foreach ($pedidos as $pedido) {
            # code...
            $pedido->productos = json_decode($pedido->productos);
            $pedido->mPago = json_decode($pedido->mPago);
            $pedido->direccion = json_decode($pedido->direccion);
            $pedido->usuario = User::find($pedido->id_usuario);
        }
        return view('pedidos.listado',['pedidos'=>$pedidos]);
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
    public function update(Request $request)
    {
        //
        Pedidos::where('id',$request['id'])->update(['status'=>$request['status']]);
        $pedidos = Pedidos::all();
        foreach ($pedidos as $pedido) {
            # code...
            $pedido->productos = json_decode($pedido->productos);
            $pedido->mPago = json_decode($pedido->mPago);
            $pedido->direccion = json_decode($pedido->direccion);
            $pedido->usuario = User::find($pedido->id_usuario);
        }
        return view('pedidos.listado',['pedidos'=>$pedidos]);
    }

    public function apiPedidos(Request $request)
    {
        //
        try {
            //code...
            $date = now();
            $date = $date->format('Y-m-d');
            Pedidos::create([
                'id_usuario'=>$request['usuario']['id'], 
                'productos'=>json_encode($request['productos']), 
                'fecha'=> $date, 
                'tipoDelivery'=>$request['tipoDelivery'], 
                'mPago'=>json_encode($request['mPago']), 
                'direccion'=>json_encode($request['direccion']), 
                'subtotal'=>$request['subtotal'], 
                'descuento'=>$request['descuento'], 
                'total'=>$request['total'], 
                'cupon'=>$request['cupon'],
                'tienda'=>$request['tienda'],
                'comentarios'=>$request['comentarios'],
            ]);

            return ['msg'=>'pedido registrado','error'=>false];
        } catch (\Throwable $th) {
            //throw $th;
            //return $th;
            return ['msg'=>$th,'error'=>true];
        }
    }

    public function getPedidos($id)
    {
        //
        try {
            //code...
            $pedidos = Pedidos::where('id_usuario',$id)->where('status','!=',4)->get();
            $todos = Pedidos::where('id_usuario',$id)->where('status',4)->get();

            foreach ($pedidos as $x) {
                # code...
                $x->tienda = Sucursal::find($x->tienda);
            }

            foreach ($todos as $x) {
                # code...
                $x->tienda = Sucursal::find($x->tienda);
            }
            return ['activos'=>$pedidos,'todos'=>$todos];   
        } catch (\Throwable $th) {
            //throw $th;
            //return $th;
            return ['msg'=>$th,'error'=>true];
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
}
