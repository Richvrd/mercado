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
            <h1 style="color: white;font-size: 5rem;">Todos los productos que necesite</h1>
        </div> 
    </div> 
</div> 

<!-- Contenido -->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="card me-2" style="width: 18rem;">
            <img src="{!! asset('imagenes/prod1.webp') !!}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Polera de Algodón</h5>
                <p class="card-text">Esta es la descripcion de la polera de algodon blanca</p>
                <a href="vistaProv" class="btn btn-primary">Ver Proveedor</a>
            </div>
        </div>
        <div class="card me-2" style="width: 18rem;">
            <img src="{!! asset('imagenes/prod2.webp') !!}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bebida Coca-Cola</h5>
                <p class="card-text">Esta es la descripcion de la bebida coca-cola</p>
                <a href="vistaProv" class="btn btn-primary">Ver Proveedor</a>
            </div>
        </div>
        <div class="card me-2" style="width: 18rem;">
            <img src="{!! asset('imagenes/prod3.webp') !!}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Carcasa Iphone 11</h5>
                <p class="card-text">Esta es la descripcion de la carcasa del Iphone11</p>
                <a href="vistaProv" class="btn btn-primary">Ver Proveedor</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{!! asset('imagenes/prod4.webp') !!}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hamburguesa</h5>
                <p class="card-text">Esta es la descripción de la hamburguesa</p>
                <a href="vistaProv" class="btn btn-primary">Ver Proveedor</a>
            </div>
        </div>
    </div>
</div>



{{View::make('Templates.footer')}}
@endsection