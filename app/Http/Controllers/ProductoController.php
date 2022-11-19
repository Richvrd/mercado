<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos'] = Producto::paginate(5);
        return view('catalogo',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosProducto = request()->all(); //Muestra todos los datos
        $datosProducto = request()->except('_token');   //Muestra todos los datos exepto "_token" para agregarlos a la BD

        if($request->hasFile('imagen')){    //Agregar imagen a carpeta uploads de storage
            $datosProducto['imagen'] = $request->file('imagen')->store('uploads','public');
        }

        Producto::insert($datosProducto);
        // return response()->json($datosProducto);
        return redirect('producto')->with('success','Producto ingresado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Producto::findOrFail($id);
        return view('vistaProv',['producto'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except(['_token','_method']);

        if($request->hasFile('imagen')){    //Agregar imagen a carpeta uploads de storage
            $producto = Producto::findOrFail($id);
            Storage::delete('public/'.$producto->imagen);
            $datosProducto['imagen'] = $request->file('imagen')->store('uploads','public');
        }

        Producto::where('id','=',$id)->update($datosProducto);
        $producto = Producto::findOrFail($id);
        return view('producto.edit',compact('producto'));
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        if(Storage::delete('public/'.$producto->imagen)){
            Producto::destroy($id);
        }

        
        
        return redirect('producto')->with('success','Producto '.$producto->titulo.' Borrado');
    }
}
