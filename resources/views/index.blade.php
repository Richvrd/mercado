@extends('master')
@section('content')

    {{View::make('Templates.header')}}
    @guest
    <!-- Bienvenida -->
    <div class="container">
        <div class="row" style="margin-top: 5rem;">
            <div class="col-sm-12 col-md-4" style="margin-top: 10rem;">
                <h1 class="text-center">Bienvenido a Mercado Proveedores</h1>
                <p class="text-center">Todo lo que necesites con las mejores opciones</p>
                <div style="margin-left: 5rem;">
                    <a class="btn btn-outline-primary" href="login">Iniciar Sesión</a>
                    <a class="btn btn-primary" href="registrarse">Registrarse</a>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-8">
                <img class="logo1" src="{!! asset('imagenes/logo1.png') !!}">
            </div>
        </div>
    </div>
    <!-- Fin Bienvenida -->
    @endguest

    @auth
    <div class="container">
        <div class="row" style="margin-top: 5rem;">
            <div class="col-sm-12 col-md-4" style="margin-top: 10rem;">
                <h1 class="text-center">Bienvenido a Mercado Proveedores</h1>
                <p class="text-center">Todo lo que necesites con las mejores opciones</p>
                <h4 class="text-center">¡Hola {{Auth::user()->name}}!</h4>
            </div>
            <div class="col-sm-12 col-md-8">
                <img class="logo1" src="{!! asset('imagenes/logo1.png') !!}">
            </div>
        </div>
    </div>
    @endauth

    <!-- Contenido -->

    <div>
        <h1>Botones temporales</h1>
        <a href="producto" class="btn btn-primary">Ver Productos</a>
        <a href="producto/create" class="btn btn-primary">Crear Productos</a>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="card me-2" style="width: 18rem;">
                <img src="{!! asset('imagenes/prod1.webp') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Polera de Algodón</h5>
                    <p class="card-text">Esta es la descripcion de la polera de algodon blanca</p>
                    <a href="producto" class="btn btn-primary">Ver Catalogo</a>
                </div>
            </div>
            <div class="card me-2" style="width: 18rem;">
                <img src="{!! asset('imagenes/prod2.webp') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bebida Coca-Cola</h5>
                    <p class="card-text">Esta es la descripcion de la bebida coca-cola</p>
                    <a href="catalogo" class="btn btn-primary">Ver Catalogo</a>
                </div>
            </div>
            <div class="card me-2" style="width: 18rem;">
                <img src="{!! asset('imagenes/prod3.webp') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Carcasa Iphone 11</h5>
                    <p class="card-text">Esta es la descripcion de la carcasa del Iphone11</p>
                    <a href="catalogo" class="btn btn-primary">Ver Catalogo</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{!! asset('imagenes/prod4.webp') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hamburguesa</h5>
                    <p class="card-text">Esta es la descripción de la hamburguesa</p>
                    <a href="catalogo" class="btn btn-primary">Ver Catalogo</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Fin Contenido -->

    {{View::make('Templates.footer')}}

@endsection