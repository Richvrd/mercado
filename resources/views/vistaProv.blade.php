@extends('master')
@section('content')

{{View::make('Templates.header')}}

<div class="row" id="box-search">
    <div class="thumbnail "> 
        <img class="img-fluid" id="foto" src="{!! asset('imagenes/tiendaRopa.jpg') !!}" style="opacity: 0.7;"> 
        <div class="caption">
            <div class="container mt-5 mb-5">
                <div class="row" style="height:30rem;">
                    <div class="col-md-3">
                        <img src="{!! asset('imagenes/prod1.webp') !!}" class="card-img-top" alt="..." style="margin-top: 2rem;">
                    </div>
                    <div class="col-md-9" style="color: white;">
                        <h1>Polera de Algodón Blanca</h1>
                        <br>
                        <h2>Proveedor: Juan Peres Castro</h2>
                        <h2>Marca: Maui</h2>
                        <h2>Descripción: </h2><h5>Polera 100% algodón de color blanca marca Maui, la polera más vendida por su calidad de textura y diseño simple</h5>
                        <div class="mt-4">
                            <a class="btn btn-primary">Añadir al Carrito<i class="bi bi-cart ms-2"></i></a>
                            <a class="btn btn-info">Añadir Favoritos<i class="bi bi-heart ms-2"></i></a>
                        </div>
                    </div>
                    <div style="color: white;">
                        <h1>Reseñas</h1>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div> 




{{View::make('Templates.footer')}}

@endsection