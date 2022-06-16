@extends('layouts.app')

@section('content')

<main  style="min-height: 35vw;"> 
<div class="skew-cc-top"></div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <h3 class="card-header">Añadir Local</h3>
        <div class="card-body">
          <form method="POST" action="{{ route('sitios.store') }}" enctype="multipart/form-data">
          
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
                  <option disabled selected value="">Selecciona tipo</option>
                  <option value="local">Local</option>
                  <option value="supermercado">Supermercado</option>
                  <option value="tienda">Tienda</option>
                </select>
              </div>
            </div>

            {{-- Direccion --}}
            <div class="row mb-3">
              <label for="nombre" class="col-md-4 col-form-label text-md-end">
                  Direccion
              </label>

              <div class="col-md-6">
                <select 
                id="direccion" 
                class="form-select @error('direccion') is-invalid @enderror" 
                name="direccion" 
                required >

                  <option disabled selected value="">Selecciona direccion</option>
                  @foreach($direcciones as $direccion)
                    <option value="{{ $direccion->id }}">{{ $direccion->nombre }}</option>
                  @endforeach

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
                required 
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
                placeholder="Introduce el nombre..."
                value="{{ old('nombre') }}" 
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
                value="08:00"
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
                value="22:00"
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
                value="{{ old('descripcion') }}" 
                required
                placeholder="Descripcion del lugar..."
                autocomplete="descripcion"></textarea> 
                
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
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                </div>
            </div>
          
          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
<div class="skew-ccc "></div>
</main>
@endsection
