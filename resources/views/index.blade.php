@extends('master')
@section('content')

    {{View::make('Templates.header')}}
    <!-- Bienvenida -->
    <div class="container">
        <div class="row" style="margin-top: 5rem;">
            <div class="col-sm-12 col-md-4" style="margin-top: 8rem;">
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

    <!-- Contenido -->
    <div style="height: 10rem;">
        <h1 class="text-center" style="margin-top: 5rem;">Contenido</h1>
    </div>
    <!-- Fin Contenido -->

    {{View::make('Templates.footer')}}

@endsection