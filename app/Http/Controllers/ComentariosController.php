<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Sitios;
use \App\Models\Comentarios;

class ComentariosController extends Controller
{

    
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Sitios $sitio)
    {
        $data = $request->validate([
            'estrellas'=>'required|string'
        ],[
            'estrellas.required'=>'Selecciona una valoracion'
        ]);

        Comentarios::create([
            'texto' => $request['texto'],
            'sitio'=>$sitio['id'],
            'user_id'=>auth()->user()->id,
            'valoracion'=>$data['estrellas'],
            'name'=>$request['nombre_comentario']
        ]);
        $this->newValoracion($sitio,$data['estrellas']);

        return redirect()->route('sitios.individual',$sitio['id']);
    }

    public function newValoracion(Sitios $sitio,$valoracionA){
        $sitioA=Sitios::find($sitio['id']);
        $actualValoracion=$sitio->valoracion;
        $medias=Comentarios::get()->where('sitio',$sitio['id']);
        $numValoracions=count($medias);
        $new_valoracion=$actualValoracion+$valoracionA;

        $media=$new_valoracion/$numValoracions;
        
        $sitio->valoracion=$new_valoracion;
        $sitio->save();
    }
    /**{}
     * Display the specified resource.
     *
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function show(Comentarios $comentario)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sitios $sitios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sitios  $sitios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitios $sitios)
    {
        
    }
}
