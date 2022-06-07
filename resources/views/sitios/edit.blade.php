@extends('layouts.app')

@section('content')
<main  style="min-height: 35vw;"> 
<div class="skew-cc-top "></div>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card mb-2" style="width:100%">
        <div class="row g-0">
          
          <div class="col-md-12">
          <h3 class="card-header">Editar {{ $sitio->titulo }}</h3>
          <div class="card-body">
            <img src={{ $sitio->imagen }}  style="width:512px;height:100%;margin-bottom:1%;float:left">
            <form method="POST" action="{{ route('sitios.update',$sitio->id) }}" enctype="multipart/form-data" style="float:center;" >
              @method('PUT')
              @csrf

              {{-- Tipo --}}
              <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">
                    Tipo
                </label>

                <div class="col-md-6">
                  <select 
                  id="tipo"
                  name="tipo"
                  class="form-select @error('tipo') is-invalid @enderror" 
                  value="{{ old('tipo') }}" 
                  required>
                  <option value="">Selecciona tipo</option>

                  @if ($sitio->tipo == 'local')
                    <option selected value="local">Local</option>
                  @else
                    <option value="local">Local</option>
                  @endif

                  @if ($sitio->tipo == 'supermercado')
                    <option selected value="supermercado">Supermercado</option>
                  @else
                    <option value="supermercado">Supermercado</option>
                  @endif

                  @if ($sitio->tipo == 'tienda')
                    <option selected value="tienda">Tienda</option>
                  @else
                    <option value="tienda">Tienda</option>
                  @endif
                  
                    
                    
                  </select>
                </div>
              </div>

              
              {{-- Imagen --}}
            <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">
                    Imagen de cabecera
                </label>

                <div class="col-md-6">
                  <input 
                  id="imagen" 
                  type="file"
                  accept=".pdf,.jpg,.png" 
                  class="form-control @error('imagen') is-invalid @enderror" 
                  name="imagen" 
                  value="{{ old('imagen') }}"  
                  autocomplete="imagen">

                  @error('imagen')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
            </div>

              {{-- Nombre --}}
              <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">
                    Nombre
                </label>

                <div class="col-md-6">
                  <input 
                  id="nombre" 
                  type="nombre" 
                  class="form-control @error('nombre') is-invalid @enderror" 
                  name="nombre" 
                  value="{{ $sitio->titulo  }}" 
                  required autocomplete="nombre"
                  autofocus>

                  @error('nombre')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- Hora Apertura --}}
              <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">
                    Hora Apertura
                </label>

                <div class="col-md-6">
                  <input 
                  id="h_apertura" 
                  type="time"
                  class="form-control @error('h_apertura') is-invalid @enderror" 
                  name="h_apertura" 
                  value="{{ $sitio->h_apertura  }}" 
                  required
                  autocomplete="h_apertura">

                  @error('h_apertura')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- Hora Cierre --}}
              <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">
                    Hora Cierre
                </label>

                <div class="col-md-6">
                  <input 
                  id="h_cierre" 
                  type="time"
                  class="form-control @error('h_cierre') is-invalid @enderror" 
                  name="h_cierre" 
                  value="{{ $sitio->h_cierre  }}" 
                  required
                  autocomplete="h_cierre">

                  @error('h_cierre')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- Descripcion --}}
              <div class="row mb-3">
                <label for="nombre" class="col-md-4 col-form-label text-md-end">
                    Descripcion
                </label>

                <div class="col-md-6">
                  <textarea 
                  id="descripcion" 
                  type="text"
                  default="Hola"
                  class="form-control @error('descripcion') is-invalid @enderror" 
                  name="descripcion"  
                  required
                  autocomplete="descripcion">{{ $sitio->descripcion  }}</textarea> 
                  
                  @error('descripcion')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- Submit --}}
              <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-success">
                          Confirmar
                      </button>
                  </div>
              </div>
            
            </form> 
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
 
</main> <div class="skew-ccc "></div>
@endsection

