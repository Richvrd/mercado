@extends('master')
@section('content')

{{View::make('Templates.header')}}

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


{{View::make('Templates.footer')}}

@endsection