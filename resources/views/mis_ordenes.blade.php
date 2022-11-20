@extends('master')
@section('content')

{{View::make('Templates.header')}}

<div class="container mt-5 mb-5">
        <div class="row">
            @include('mensajes')
            @foreach ( $ordenes as $orden )
                <div class="card me-2" style="width: 18rem;">
                    <img src="{{ asset('storage').'/'.$orden->imagen }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$orden->titulo}}</h5>
                        <p class="card-text">{{$orden->descripcion}}</p>
                    </div>
                    <h5>Estado de envio: {{ $orden->estado }}</h5>
                    <h5>Estado de pago: {{ $orden->estado_pago }}</h5>
                    <h5>Método de pago: {{ $orden->metodo_pago }}</h5>
                    <h5>Dirección de envío: {{ $orden->direccion }}</h5>
                </div>
            @endforeach
        </div>
    </div>

{{View::make('Templates.footer')}}

@endsection