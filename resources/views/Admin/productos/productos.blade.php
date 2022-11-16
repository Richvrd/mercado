@extends('Admin.adminMaster')
@section('content')
<h1 class="text-center mt-5 mb-5">Menú Productos</h1>
<div class="container">
    <div class="row w-25 mx-auto">
      <a class="btn btn-primary mb-2" href="eliminarProd">Eliminar Producto</a>
    </div>
</div>

<table class="table table-striped-columns mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre Proveedor</th>
      <th scope="col">Titulo Producto</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidades</th>
      <th scope="col">Imagen del Producto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Alberto</td>
      <td>Titulo Producto</td>
      <td>Maui</td>
      <td>$150.000</td>
      <td>50</td>
      <td>Imagen Producto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Juan</td>
      <td>Titulo Producto</td>
      <td>Nike</td>      
      <td>$500.000</td>
      <td>10</td>
      <td>Imagen Producto</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jorge</td>
      <td>Titulo Producto</td>
      <td>Adidas</td>
      <td>$600.000</td>
      <td>15</td>
      <td>Imagen Producto</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Tomás</td>
      <td>Titulo Producto</td>
      <td>Coca-cola</td>
      <td>$80.000</td>
      <td>60</td>
      <td>Imagen Producto</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Roberto</td>
      <td>Titulo Producto</td>
      <td>PF</td>
      <td>$220.000</td>
      <td>100</td>
      <td>Imagen Producto</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Manuel</td>
      <td>Titulo Producto</td>
      <td>Colún</td>
      <td>$140.000</td>
      <td>150</td>
      <td>Imagen Producto</td>
    </tr>
  </tbody>
</table>

<!-- AGREGAR DESPUES

<table class="table table-striped-columns mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Proveedor</th>
      <th scope="col">Titulo Producto</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidades</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen del Producto</th>
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

 -->
@endsection