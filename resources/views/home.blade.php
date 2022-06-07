@extends('layouts.app')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@section('content')
<main style="min-height: 35vw;"> 
<div class="skew-cc-top"></div>

<div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <h2 class="card-header" id="titulo">Perfil</h2>
        <div class="card-body">
          
            
            {{-- Nombre --}}
            <div class="row mb-3">
              <label for="nombre" class="col-md-4 col-form-label text-md-end">
                  <h5>Nombre</h5>
              </label>
            
              <div class="col-md-4" >
              <form method="POST" action="{{ route('user.updateName') }}" style="display:flex;justify-content: space-between;">
                @csrf
                  <input 
                  id="nombre" 
                  type="text" 
                  class="form-control @error('nombre') is-invalid @enderror" 
                  name="nombre" 
                  value="{{ auth()->user()->name }}" 
                  disabled
                  style="margin-right:10px">
                  <a class="btn btn-warning" id="btn_nombre">Editar</a>
                  
                  <div hidden id="edit_nombre" style="display:flex;justify-content: space-between;">
                    <input type="submit" class="btn btn-success" id="btn_confirm_name" style="margin-right:10px" value="Confirmar" >
                    <a class="btn btn-danger"  id="btn_cancelar_name">Cancelar</a>
                  </div>
               
                @error('nombre')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror 
                 </form>
              </div>
             
            </div>

             {{-- Email --}}
            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">
                  <h5>Email</h5>
              </label>
            
              <div class="col-md-4">
              <form method="POST" action="{{ route('user.updateEmail') }}" style="display:flex;justify-content: space-between;">
                @csrf
                <input 
                id="email" 
                type="email" 
                class="form-control @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ auth()->user()->email }}" 
                disabled 
                style="margin-right:10px">
                <a class="btn btn-warning" id="btn_email">Editar</a>

                <div hidden id="edit_email" style="display:flex;justify-content: space-between;">
                  <input type="submit" class="btn btn-success" id="btn_confirm_email" style="margin-right:10px" value="Confirmar" >
                  <a class="btn btn-danger" id="btn_cancelar_email" >Cancelar</a>
                </div>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </from>
              </div>  
              
            </div>
            <a class="btn btn-primary" href="{{ url('/changepass') }}" style="margin-left:34%" >Cambiar Contraseña</a>
          
            
            
            
        </div>
      </div>
    </div>
   
    </main>
     <div class="skew-ccc"></div>
@endsection

<script src="{{ asset('js/edit.js') }}"></script>