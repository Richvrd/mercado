<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// AUTH
Route::get('/registrarse', [RegisterController::class,'show'] );
Route::post('/registrarse', [RegisterController::class,'register'] );

Route::get('/login', [LoginController::class,'show']);
Route::post('/login', [LoginController::class,'login']);

// HOME
Route::get('/', function () {return view('index');});

Route::get('/logout', [LogoutController::class,'logout']);


Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

// COMPRADOR
Route::get('/compradores', function () {
    return view('admin/comprador/compradores');
});
Route::get('/registrarComp', function () {
    return view('admin/comprador/registrarComp');
});
Route::get('/actualizarComp', function () {
    return view('admin/comprador/actualizarComp');
});
Route::get('/eliminarComp', function () {
    return view('admin/comprador/eliminarComp');
});

// PROVEEDOR
Route::get('/proveedores', function () {
    return view('admin/proveedor/proveedores');
});
Route::get('/registrarProv', function () {
    return view('admin/proveedor/registrarProv');
});
Route::get('/actualizarProv', function () {
    return view('admin/proveedor/actualizarProv');
});
Route::get('/eliminarProv', function () {
    return view('admin/proveedor/eliminarProv');
});
Route::get('/vistaProv', function () {
    return view('vistaProv');
});
Route::get('/perfilVendedor', function () {
    return view('perfilVendedor');
});

// PRODUCTO
Route::get('/productos', function () {
    return view('admin/productos/productos');
});
Route::get('/eliminarProd', function () {
    return view('admin/productos/eliminarProd');
});

// CONTACTO
Route::get('/contactos', function () {
    return view('admin/contactos');
});

// CATALOGO
Route::get('/catalogo', function () {
    return view('catalogo');
});


