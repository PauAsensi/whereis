@extends('layouts.app')
@section('content')
<main  style="min-height: 35vw;"> 
<div class="container">
  <div id="filtros" class="bg-success" style="margin-bottom:3%;">
    <ul class="nav nav-pills nav-fill" style="font-size:15px" >
      <li class="nav-item" style="border-right:1px solid white;">
        <a class="nav-link text-light" href={{ route('sitios.index') }}>Todos</a>
      </li>
      <li class="nav-item" style="border-right:1px solid white">
        <a class="nav-link text-light" href={{ route('sitios.filtro',['tipo'=>'tienda']) }}>Tiendas</a>
      </li>
      <li class="nav-item" style="border-right:1px solid white">
        <a class="nav-link text-light" href={{ route('sitios.filtro',['tipo'=>'supermercado']) }}>Supermercados</a>
      </li>
      <li class="nav-item" style="border-right:1px solid white">
        <a class="nav-link text-light" href={{ route('sitios.filtro',['tipo'=>'local']) }}>Locales</a>
      </li>
      <li class="nav-item">
        <form mehod="POST" class="nav-link" action={{ route('sitios.nombre') }}>
            @csrf
          <input style="border-radius:5px;" name="search" type="text" placeholder="Buscar por nombre ...">
          <input style="border-radius:5px;" value="Buscar" type="submit">
        </form>
      </li>
    </ul>
  </div>
  <h1 style="margin-bottom:3%">{{ $titulo }}</h1>
  <div class="row row-cols-1 row-cols-md-3 g-5">
  @if(count($sitios) == 0)
      <div style="position:relative;left:35%;transform:transalte(-50%,-50%);width:500px;">
        <h3 class="text-grey">No se han encontrado resultados...</h3>
      </div>
  @endif
    @foreach($sitios as $sitio)
    <div class="col" style="margin-bottom:3%">
      <div class="card h-100" style="border-radius:5%;">
        <img src={{ $sitio->imagen }} class="card-img-top" style="border-radius:5% 5% 0 0;height:250px" >
        <div class="card-body " >
          <h3 class="card-title ">{{ $sitio->titulo }}</h3>
        </div>
        <ul class="list-group list-group-flush ">
          <li class="list-group-item">Abre a las {{ $sitio->h_apertura }}</li>
          <li class="list-group-item">Cierra a las {{ $sitio->h_cierre }}</li>
          <li class="list-group-item">{{ $sitio->direccion }} (46760)</li>
          <li class="list-group-item">{{ $sitio->descripcion }}</li>
        </ul>
        <div class="card-body">
          <center>
            <a href="{{ route('sitios.individual',$sitio->id) }}" class="btn btn-primary">Ver detalles</a>
          </center> 
        </div>
      </div>
    </div>
    @endforeach
  
  </div>

</div>
<div class="skew-ccc "></div>
</main>
@endsection

