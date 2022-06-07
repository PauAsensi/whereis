@extends('layouts.app')
@section('content')

<main style="min-height: 35vw;"> 
<div class="skew-cc-top "></div>
<div class="container">
    <div class="card mb-2" style="width:100%">
    <div class="row g-0">
        <div class="col-md-5">
        <img src={{ $sitio->imagen }} class="img-fluid rounded-start" style="width:512px;height:100%;max-height:450px;margin-top:15%;margin-left:3%;border:1px solid">
        </div>
        <div class="col-md-7">
            <div class="card-body" >
                <h1 class="card-title">{{ $sitio->titulo }}</h1>
                <div style="margin-left:2%">
                    <p class="card-text">
                    <small class="text-muted">
                        Publicado el {{ $sitio->created_at }}<br>
                        Autor : {{ $sitio->user->name }}
                    </small>
                    </p>
                    <p><b>Decripcion</b></p>
                    <p class="card-text">{{ $sitio->descripcion }}</p>

                    <p><b>Horario</b></p>
                    <p class="card-text">Hora apertura: {{ $sitio->h_apertura }}</p>
                    <p class="card-text">Hora cierre: {{ $sitio->h_apertura }}</p>

                    
                   <p><b>Deja tu comentario</b></p>
                    <form method="POST" action="{{ route('comentarios.store',$sitio) }}" >
                            @csrf
                            <p><textarea name="texto" style="width:50%;" placeholder="Escribe un comentario..." required></textarea></p>
                        <input type="submit" value="Enviar"><br>
                    </form><br>
                    <p><b>Comentarios</b></p>
                     <div id="comentarios" style="padding:3px;width:50%;">
                     @if(count($comentarios)==0)
                        <p>No hay comentarios ...</p>
                     @else
                        @foreach ($comentarios as $comentario)
                            <small class="text-muted">Fecha publicacion : {{ $comentario->created_at }}</small>
                                    <p>{{ $comentario->user }}:  <small> {{ $comentario->texto }} </small></p>   
                        @endforeach
                     @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<div class="skew-ccc "></div>
</main>
@endsection
