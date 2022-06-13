@extends('layouts.app')

@section('content')
<main style="min-height: 35vw;"> 
<div class="skew-cc-top"></div>
    <div class="row justify-content-center" >
        <div class="col-md-9">
            <div class="card">
                <h3 class="card-header">Cambiar Contraseña</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.updatePass') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Nueva contraseña</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if(session('passwd'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ session('passwd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Repetir nueva contraseña</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-success">Confirmar</button>
                                <a class="btn btn-danger" href="{{ url('/home') }}">Cancelar</a>
                            </div>
               
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
