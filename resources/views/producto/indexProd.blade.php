@extends('master')
@section('content')

    {{View::make('Templates.header')}}

    <h1>Aca se muestran los productos</h1>

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
                    <td>{{ $producto->imagen }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    {{View::make('Templates.footer')}}

@endsection