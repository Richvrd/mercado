<?php
    use App\Models\Producto;
    $productos = Producto::all();
?>

@extends('master')
@section('content')

{{View::make('Templates.header')}}

<!-- <img class="img-fluid" id="foto" src="{!! asset('imagenes/imagen1.webp') !!}">
<h1>Hola</h1> -->
<div class="row" id="box-search">
    <div class="thumbnail text-center"> 
        <img class="img-fluid" style="opacity: 0.8;" id="foto" src="{!! asset('imagenes/imagen1.webp') !!}" alt=""> 
        <div class="caption">
            <img src="{!! asset('imagenes/logoEmpresa.png') !!}" alt="">
            <h1 id="fuente" style="color: white;font-size: 5rem;">Todos los productos que necesite</h1>
        </div> 
    </div> 
</div> 

<!-- Contenido -->

<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            @include('mensajes')
            @foreach ( $productos as $producto )
                <div class="row p-2 bg-white border rounded mb-3">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ asset('storage').'/'.$producto->imagen }}"></div>
                    <div class="col-md-6 mt-1">
                        <h5 id="fuente">{{ $producto['titulo'] }}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>Cantidad: {{ $producto['cantidad'] }}</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1">
                            <span>Proveedor: {{$producto['proveedor']}}</span>
                            <br>
                        </div>
                        <p class="text-justify text-truncate">{{ $producto['descripcion'] }}<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">${{ $producto['precio'] }}</h4>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4">
                            <a href="{{url('/producto/'.$producto->id)}}" class="btn btn-outline-primary btn-sm" type="button">Ver Proveedor</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- <div class="container mt-5 mb-5">
    <div class="row">
        @include('mensajes')
        @foreach ( $productos as $producto )
        <div class="card me-2" style="width: 18rem;">
            <img src="{{ asset('storage').'/'.$producto->imagen }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$producto['titulo']}}</h5>
                <p class="card-text">{{$producto['descripcion']}}</p>
                <a href="{{url('/producto/'.$producto->id)}}" class="btn btn-primary">Ver Proveedor</a>
            </div>
        </div>
        @endforeach
    </div>
</div> -->


{{View::make('Templates.footer')}}
@endsection