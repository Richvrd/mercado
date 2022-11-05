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
                        <h2>$5.000 x unidad</h2><input style="width: 5.2rem;border-radius: 1rem;" type="number" placeholder="cantidad">
                        <div class="mt-4">
                            <a class="btn btn-primary">Añadir al Carrito<i class="bi bi-cart ms-2"></i></a>
                            <a class="btn btn-info">Añadir Favoritos<i class="bi bi-heart ms-2"></i></a>
                        </div>
                    </div>
                    <div class="container">
                        <h1 style="color: white;margin-top: 5rem;">Reseñas</h1>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Roberto Valenzuela Henríquez</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Cantidad: 50</h6>
                                <p class="card-text">¡Excelente! muy contento con la compra, el producto es como en la descripción, de buena calidad con un diseño simple pero elegante. Contento con la compra</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Felipe Agurto Henríquez <i class="bi bi-trash justify-content-end"></i></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Cantidad: 20</h6>
                                <p class="card-text">Buena calidad. El producto cumple con la descripción pero el diseño muy simple a mi gusto. De poder venderlos compraré más</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Junior Mbappe Fernandez</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Cantidad: 35</h6>
                                <p class="card-text">Me gusto la simplesa del diseño, no es muy llamativa y es elegante, como me gustan las poleras.</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <textarea name="" id="" cols="20" rows="3" placeholder="Ingrese Comentario"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div> 




{{View::make('Templates.footer')}}

@endsection