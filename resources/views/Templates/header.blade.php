<?php
    use App\Http\Controllers\ProductoController;
    $total = ProductoController::itemCarrito();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<!-- Barra Navegador -->
<nav class="navbar navbar-expand-lg" style="background-color: #fd7e14;height: 5rem;box-shadow: 2px 2px 5px rgb(131, 131, 131);">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="w-25 ms-5" src="{!! asset('imagenes/logoEmpresa.png') !!}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    <a class="nav-link" href="#">Quienes Somos</a>
                    <a class="nav-link" href="#">Proveedores</a>
                    <a class="nav-link" href="#">Preguntas Frecuentes</a> -->
                    <div style="margin-right: 5rem;">
                        @auth
                        <a href="/perfil" id="btn-nav" class="bi bi-person"><h4 class="d-inline" style="font-weight: lighter;">{{ Auth::user()->name }}</h4></a>
                        <a href="/lista_carrito" id="btn-nav" class="bi bi-cart ms-4"><h4 class="d-inline" style="font-weight: lighter;">({{ $total }})</h4></a>
                        <a href="#" id="btn-nav" class="bi bi-heart-fill ms-4"></a>
                        <a href="/logout" id="btn-nav" class="bi bi-box-arrow-right ms-4"></a>                    
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fin barra navegador -->