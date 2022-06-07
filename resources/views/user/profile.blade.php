@extends('layouts.app')
@section('content')
<div class="container" >
    <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <h3 class="card-header">Editar Perfil</h3>
        <div class="card-body">
          <form method="POST" action="" enctype="multipart/form-data">
            @csrf
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
            
            {{-- Submit --}}
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
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
@endsection
