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
</div>

<h1>Aca se muestran los productos por mientras para ir agregando y tal</h1>

<div class="container">
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Proveedor</th>
            <th>Titulo</th>
            <th>Marca</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->proveedor }}</td>
                <td>{{ $producto->titulo }}</td>
                <td>{{ $producto->marca }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->cantidad }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$producto->imagen }}" width="100" alt="">
                </td>
                <td>
                
                <a href="{{ url('/producto/'.$producto->id.'/edit') }}">Editar</a>

                <form action="{{ url('/producto/'.$producto->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Borrar Producto?')" value="Borrar">
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('mensajes')
<a href="producto/create" class="btn btn-primary mb-3">Agregar Producto</a>
</div>


{{View::make('Templates.footer')}}
@endsection