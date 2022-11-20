<?php
    use App\Http\Controllers\ProductoController;
    $total = ProductoController::itemCarrito();

?>
@extends('master')
@section('content')

{{View::make('Templates.header')}}

@if ($total==0)
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 30rem;">
            <div>
                <h1>El carrito está vacío</h1>
                <a href="producto" class="btn btn-outline-secondary d-block">Buscar Productos</a>
            </div>
        </div>
        
    </div>
    
@else
    <div class="container mt-5 mb-5">
        <div class="row">
            @include('mensajes')
            @foreach ( $productos as $producto )
                <div class="card me-2" style="width: 18rem;">
                    <img src="{{ asset('storage').'/'.$producto->imagen }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$producto->titulo}}</h5>
                        <p class="card-text">{{$producto->descripcion}}</p>
                        <a href="/quitar_carrito/{{ $producto->carrito_id }}" class="btn btn-danger">Quitar del Carrito</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mb-3">
        <a href="producto" class="btn btn-outline-secondary">Volver</a>
        <a href="ordenar_ahora" class="btn btn-success">Ordenar Ahora</a>
    </div>
@endif

{{View::make('Templates.footer')}}

@endsection