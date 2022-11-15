@extends('master')
@section('content')

    {{View::make('Templates.header')}}

    <div class="container mt-5 mb-5 w-50">
        <h1 class="text-center mb-3">Ingrese el Producto</h1>
        <form action="" class="row g-3">
            @csrf
            <div class="col-6">
                <label for="tituloInput" class="from-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="tituloInput">
            </div>
            <div class="col-6">
                <label for="marcaInput" class="from-label">Marca</label>
                <input type="text" class="form-control" name="marca" id="marcaInput">
            </div>
            <div class="col-6">
                <label for="precioInput" class="from-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precioInput">
            </div>
            <div class="col-6">
                <label for="cantidadInput" class="from-label">Cantidad</label>
                <input type="text" class="form-control" name="cant" id="cantidadInput">
            </div>
            <div class="col-12">
                <label for="descInput" class="from-label">Descripcion</label>
                <textarea name="desc" class="form-control" id="descInput" cols="30" rows="5"></textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </div>


    {{View::make('Templates.footer')}}

@endsection