@extends('layouts.app')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@section('content')
<main class="py-4" style="min-height: 35vw;">
<div class="contanier">
  <h1>Vaya algo salio mal...</h1>
</div>
</main>
@endsection
