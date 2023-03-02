<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use App\Models\User;
use App\Models\Negocio;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

use Mail;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $usuarios = User::where('id_negocio',$request->user()->id_negocio)->get();
        return view('usuarios.listado',['usuarios'=>$usuarios]);
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

    public function created(Request $request)
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
            User::create(
                [
                    'nombre'=>$request['nombre'], 
                    'ap_paterno'=>$request['ap'], 
                    'ap_materno'=>$request['am'], 
                    'telefono'=>$request['telefono'], 
                    'direccion'=>$request['direccion'], 
                    'tipo'=>$request['tipo'], 
                    'foto'=>$foto, 
                    'id_negocio'=>$request->user()->id_negocio, 
                    'email'=>$request['correo'], 
                    'password'=>$request['password']
                ]
            );

            return view('usuarios.registro',['success'=>1]);

        } catch (\Throwable $th) {
            //throw $th;
            return view('usuarios.registro',['success'=>2]);
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
        return view('usuarios.registro',['success'=>0]);
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
        $user = User::find($request['id']);
        return view('usuarios.editar',['usuario'=>$user]);
    }

    public function delete(Request $request)
    {
        //
        User::where('id',$request['id'])->delete();
        $usuarios = User::where('id_negocio',$request->user()->id_negocio)->get();
        return view('usuarios.listado',['usuarios'=>$usuarios]);
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
            }else{
                $foto = $request['media'];
            }
            User::find($request['id'])->update(
                [
                    'nombre'=>$request['nombre'], 
                    'ap_paterno'=>$request['ap'], 
                    'ap_materno'=>$request['am'], 
                    'telefono'=>$request['telefono'], 
                    'direccion'=>$request['direccion'], 
                    'tipo'=>$request['tipo'], 
                    'foto'=>$foto, 
                    'id_negocio'=>$request->user()->id_negocio, 
                    'email'=>$request['correo'], 
                    'password'=>$request['password']
                ]
            );

            $usuarios = User::where('id_negocio',$request->user()->id_negocio)->get();
        return view('usuarios.listado',['usuarios'=>$usuarios]);

        } catch (\Throwable $th) {
            //throw $th;
            $usuarios = User::where('id_negocio',$request->user()->id_negocio)->get();
            return view('usuarios.listado',['usuarios'=>$usuarios]);
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

    public function apiUsuarios(Request $request){
        try {
            //code...
            $usuario = User::where('email',$request['email'])->get();
            if(count($usuario)>0){
                return ['ok'=>false,'text'=>'Error!!, Usuario registrado anteriormente'];
            }else{
                User::create(
                    [
                        'nombre'=>$request['nombre'], 
                        'ap_paterno'=>$request['apellidop'], 
                        'ap_materno'=>$request['apellidom'], 
                        'telefono'=>$request['phone'], 
                        'direccion'=>'N/A', 
                        'tipo'=>'cliente', 
                        'foto'=>'N/A', 
                        'id_negocio'=>0, 
                        'email'=>$request['email'], 
                        'password'=>$request['password']
                    ]
                );
            }
            return ['ok'=>true,'text'=>''];
        } catch (\Throwable $th) {
            //throw $th;
            return ['ok'=>false,'text'=>$th];
        }
    }

    public function apiLogin(Request $request){
        $usuario = User::where('email','=',$request['email'])->where('tipo','=','cliente')->get();
        if($usuario){
            if(count($usuario) > 0){
                if($usuario[0]['password'] == $request['password']){
                    return ['ok'=>true,'data'=>$usuario[0]];
                }else{
                    return ['ok'=>false,'data'=>array(),'text'=>'Contraseña Incorrecta'];

                }
            }else{
                return ['ok'=>false,'data'=>array(),'text'=>'Email No registrado'];
    
            }
        }else{
            return ['ok'=>false,'data'=>array(), 'text'=>'Email No registrado'];
        }
    }


    public function sendMailApi(){
        $mailData = [
            'title' => 'Mail from Web-tuts.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('juancarlosmh095@gmail.com')->send(new Mailer($mailData));
           
        dd("Email is sent successfully.");
    }
}
