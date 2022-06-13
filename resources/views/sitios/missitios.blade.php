@extends('layouts.app')
@section('content')
<main  style="min-height: 33.5vw;"> 
<div class="skew-cc-top "></div>
<div class="container">
  <h1>{{ $titulo }}</h1>
    @if(count($sitios) == 0)
      <div style="position:relative;left:35%;transform:transalte(-50%,-50%);width:500px;">
        <h1 class="text-grey">No tienes sitios todavia...</h1>
        <a style="width:400px;" class="btn btn-primary" href={{ url('/sitio/create') }}>Añadir un lugar</a>
      </div>
    @endif
  <div class="row row-cols-1 row-cols-md-4 g-5">
    @foreach($sitios as $sitio)
    <div class="col">
      <div class="card h-100" style="border-radius:5%;">
        <img src={{ $sitio->imagen }} class="card-img-top" style="border-radius:5% 5% 0 0;height:250px" >
        <div class="card-body">
          <h3 class="card-title ">{{ $sitio->titulo }}</h3>
        </div>
        <ul class="list-group list-group-flush ">
          <li class="list-group-item">Abre a las {{ $sitio->h_apertura }}</li>
          <li class="list-group-item">Cierra a las {{ $sitio->h_cierre }}</li>
          <li class="list-group-item">{{ $sitio->direccion }} (46688)</li>
          <li class="list-group-item">{{ $sitio->descripcion }}</li>
        </ul>
        <div class="card-body">
          <center>
            <form method="POST" action="{{ route('sitio.destroy',['sitio'=>$sitio->id]) }}" >
            @method('DELETE')
              @csrf
              <a href="{{ route('sitios.individual',$sitio->id) }}" class="btn btn-primary ">Detalles</a>
              <a href="{{ route('sitios.edit',$sitio->id) }}" class="btn btn-warning ">Editar</a>
              <input class="btn btn-danger" value="Eliminar" type="submit">
            </form>
           
          </center> 
        </div>
      </div>
    </div>
    @endforeach
  </div>
  </div>
  
</main>
@endsection
