@extends('layouts.app')
<style>

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
                        Publicado el {{ $sitio->created_at }}<br>
                        Autor : {{ $sitio->user->name }}
                    </small>
                    </p><p><b>Direccion</b></p>
                    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3097.703475324894!2d-0.26314293869399363!3d39.06767122355123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61c0d56c89844b%3A0x358e379632ba38c4!2sAv.%20Corts%20Valencianes%2C%2046760%2C%20Val%C3%A8ncia!5e0!3m2!1ses!2ses!4v1655285797801!5m2!1ses!2ses" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    <br><br><p><b>Decripcion</b></p>
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
                          <div>Valoracion</div>
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
                                <option selected disabled value="">Seleccionar opcion</option>
                                <option value="Anonimo">Anonimo</option>
                                <option value={{ $usuario->name }}>{{ $usuario->name }}</option>
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
                            <small class="text-muted">Fecha publicacion : {{ $comentario->created_at }}<br></small>
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
<script>
    var contador;
    function calificar(item){
        contador=item.id[0];
        let nombre =item.id.substring(1);

        for(let i=0;i<5;i++){
            if(i<contador){
                document.getElementById((i+1)+nombre).style.color="orange";
            }
            else{
                document.getElementById((i+1)+nombre).style.color="black";
            }
        }
    }
</script>