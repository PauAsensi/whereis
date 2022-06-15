<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Sitios;
use App\Models\Comentarios;
use App\Exceptions\Handler;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SitioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado = Sitios::get();
        return view('sitios.index', ['sitios'=>$listado,'titulo'=>'Todos']);
    }

    public function individual(Sitios $sitio)
    {
        $comentarios=Comentarios::get()->where('sitio',$sitio->id);
        return view('sitios.individual',['sitio'=>$sitio,'comentarios'=>$comentarios,'usuario'=>auth()->user()]);
    }

    public function filtro(Request $request)
    {
        $sql = 'SELECT * FROM sitios WHERE tipo="'.$request['tipo'].'"';
        $listado = DB::select($sql);
        $titulo=$this->tipoTitulo($request['tipo']);
        return view('sitios.index', ['sitios'=>$listado,'titulo'=>$titulo]);
    }

    public function nombre(Request $request)
    {
        if($request['search']==''){
            return redirect()->route('sitios.index');
        }else{
            $sql = 'SELECT * FROM `sitios` WHERE titulo LIKE "%'.$request['search'].'%";';
            $listado = DB::select($sql);
            $titulo="Resultado de : \"".$request['search']."\"";
            return view('sitios.index', ['sitios'=>$listado,'titulo'=>$titulo]);
        }
    }

    public function tipoTitulo($respuesta){
        $titulo='';
        switch($respuesta){
            case 'local':
                $titulo='Locales';
                break;
            case 'supermercado':
                $titulo='Supermercados';
                break;
            case 'tienda':
                $titulo='Tiendas';
                break;
            default:
                $titulo='Todos';
                break;
        }
        return $titulo;
    }

    public function misSitios(){
        $sitios=auth()->user()->sitios;
        return view('sitios.missitios', ['sitios'=>$sitios,'titulo'=>'Mis Sitios']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/storage/json/direcciones.json');
        $direcciones=json_decode($response,true);
        
        return view("sitios.create",['direcciones'=>$direcciones['tavernes']]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen=$request->file('imagen')->store('public/imgs');
        $url=Storage::url($imagen);

        auth()->user()->sitios()->create([
            'tipo'=>$request['tipo'],
            'direccion'=>$request['direccion'],
            'descripcion'=>$request['descripcion'],
            'titulo'=> $request['nombre'],
            'imagen'=>$url,
            'h_apertura'=>$request['h_apertura'],
            'h_cierre'=>$request['h_cierre'],
            'user_id'=>auth()->user()->id,
            'valoracion'=>0
        ]);
        return redirect()->route('sitios.index');
    }


    /**{}
     * Display the specified resource.
     *
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function show(Sitios $sitios)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seguridad=false;
        $sitio=Sitios::find($id);
        if($sitio==null){
            return view('error');
        }
        $missitios=auth()->user()->sitios;
        for($i=0;$i<count($missitios);$i++){
            if($missitios[$i]->id==$id){
                $seguridad=true;
                break;
            }
        }
        if($seguridad){
            $response=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/storage/json/direcciones.json');
            $direcciones=json_decode($response,true);
            return view('sitios.edit',['sitio'=>$sitio,'direcciones'=>$direcciones['tavernes']]);
        }else{
            return view('error');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sitio=Sitios::find($id);
        $sitio->tipo=$request->tipo;
        $sitio->titulo=$request->nombre;
        $sitio->direccion=$request->direccion;
        $sitio->h_apertura=$request->h_apertura;
        $sitio->h_cierre=$request->h_cierre;
        $sitio->descripcion=$request->descripcion;

        if($request->file('imagen')!=null){
            $imagen=$request->file('imagen')->store('public/imgs');
            $url=Storage::url($imagen);
            $sitio->imagen=$url;
        }

        //$sitio->direccion=$request->direccion;
        $sitio->save();
        return redirect()->route('sitios.missitios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {         
        DB::table('sitios')->delete($id);
        return redirect()->route('sitios.missitios');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
