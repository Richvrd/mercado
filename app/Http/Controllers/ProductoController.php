<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function create(Request $req)
    {
        if(Auth::check()){
            return view('producto.create');
        }
        return redirect('/');
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
        if(Auth::check()){
            $producto = Producto::findOrFail($id);
            return view('producto.edit',compact('producto'));
        }
        return redirect('/');
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
        if(Auth::check()){
            $producto = Producto::findOrFail($id);

            if(Storage::delete('public/'.$producto->imagen)){
                Producto::destroy($id);
            }

            return redirect('producto')->with('success','Producto '.$producto->titulo.' Borrado');
        }
        return redirect('/');
    }

    public function añadirCarrito(Request $req){
        if(Auth::check()){
            $carrito = new Carrito();
            $carrito->user_id = Auth::user()->id;
            $carrito->producto_id = $req->producto_id;
            $carrito->save();
            return redirect('producto')->with('success','Producto agregado al carrito');
        }
        return redirect('/login');
    }

    static function itemCarrito(){
        if(Auth::check()){
            $userId = Auth::user()->id;
            return Carrito::where('user_id',$userId)->count();
        }
    }
    public function listaCarrito(){
        $userId = Auth::user()->id;
        $productos = DB::table('carrito')
        ->join('productos','carrito.producto_id','=','productos.id')
        ->where('carrito.user_id',$userId)
        ->select('productos.*','carrito.id as carrito_id')
        ->get();

        return view('lista_carrito',['productos'=>$productos]);
    }
    public function quitarCarrito($id){
        Carrito::destroy($id);
        return redirect('lista_carrito')->with('success','Producto quitado del carrito');
    }
}
