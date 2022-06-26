@extends('layouts.app')


<style>
#map {
        height: 300px;
        }
input[type="radio"] {
  display: none;
}

label {
  color: grey;
  font-size: 20px;
}

.clasificacion {
  display:inline;
  direction: rtl;
  padding-left:0%;
  margin-left:0%;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}
</style>

@section('content')

<main style="min-height: 35vw;"> 

<div class="skew-cc-top "></div>
<div class="container">
    <div class="card mb-2" style="width:100%">
    <div class="row g-0">
        <div class="col-md-5">
        <img src={{ $sitio->imagen }} class="img-fluid rounded-start" style="width:512px;height:100%;max-height:450px;margin-top:7%;margin-left:3%;border:1px solid">
        </div>
        <div class="col-md-7">
            <div class="card-body" >
                <div>{{ $sitio->valoracion() }}</div>
                <h1 class="card-title">{{ $sitio->titulo }}</h1>
                <div style="margin-left:2%" >
                    <p class="card-text">
                    <small class="text-muted">
                        Publicado el {{ $sitio->created_at() }}<br>
                        @if(date('d-m-Y',strtotime($sitio->updated_at)) > date('d-m-Y',strtotime($sitio->created_at)))
                        Ultima actualización el {{ $sitio->updated_at() }}<br>
                        @endif
                        Autor : {{ $sitio->user->name }}
                    </small>
                    </p><p><b>Dirección</b></p>
                   
                     <maps-component :object="{{ $sitio->calle() }}" ></maps-component>
                    
                    <br><br><p><b>Decripción</b></p>
                    <p class="card-text">{{ $sitio->descripcion }}</p>

                    <p><b>Horario</b></p>
                    <p class="card-text">Hora apertura: {{ $sitio->hora_apertura() }}</p>
                    <p class="card-text">Hora cierre: {{ $sitio->hora_cierre() }}</p>

                    
                   
                   @auth
                    @if($sitio->user_id != auth()->user()->id) 
                        <p><b>Deja tu comentario</b></p>
                       <form method="POST" action="{{ route('comentarios.store',$sitio) }}"  >
                            @csrf
                            <!--<p>Publicar como anonimo <input type="checkbox" /> </p>--> 
                          <div>Valoración</div>
                            <div class="clasificacion" >
                                <input id="radio1" type="radio" name="estrellas" value="5" class=" @error('estrellas') is-invalid @enderror">
                                    <label for="radio1" >★</label>
                                <input id="radio2" type="radio" name="estrellas" value="4" class=" @error('estrellas') is-invalid @enderror">
                                    <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas" value="3" class=" @error('estrellas') is-invalid @enderror">
                                    <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas" value="2" class=" @error('estrellas') is-invalid @enderror">
                                    <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas" value="1" class=" @error('estrellas') is-invalid @enderror">
                                    <label for="radio5">★</label>
                                    <br>
                            </div>
                            @error('estrellas')
                                
                                <span class="invalid-feedback" role="alert" style="display:inline">
                                        <strong>{{ $message }}</strong>
                                        <br><br>
                                </span>
                            @enderror
                            <p>Publicar como: 
                            <select required name="nombre_comentario">
                                <option selected disabled value="">Seleccionar opción</option>
                                <option value="Anónimo">Anónimo</option>
                                <option value="{{ $usuario->name }}">{{ $usuario->name }}</option>
                            </select>
                            </p>
                            <p><textarea required name="texto" style="width:50%;" placeholder="Escribe un comentario..." required></textarea></p>
                            
                        <input type="submit" value="Enviar"><br>
                    </form><br>
                    @endif
                    @else
                    <p><b>Deja tu comentario</b></p>
                    <p><a href="{{ route('login') }}">Inicia session</a> para dejar un comentario...</p>
                   @endauth
                    
                    <p><b>Comentarios</b></p>
                     <div id="comentarios" style="padding:3px;width:50%;">
                     @if(count($comentarios)==0)
                        <p>No hay comentarios ...</p>
                     @else
                        @foreach ($comentarios as $comentario)
                            <small class="text-muted">Fecha publicacion : {{ $comentario->created_at() }}<br></small>
                                    {{ $comentario->valoracion() }}
                                    <p>{{ $comentario->name }}:  <small> {{ $comentario->texto }} </small></p>   
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
