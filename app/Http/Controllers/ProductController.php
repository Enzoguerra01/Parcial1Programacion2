<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        return view('index', compact('productos'));
    }

    public function crear(Request $request)
    {
    //    $validacion = Validator::make($request->all(), [
    //         'nombre' => 'required',
    //         'marca' => 'required',
    //         'descripcion' => 'required',
    //         'stock' => ['required', 'integer'],
    //    ]);

        $producto = new Product();
        $producto->nombre = $request->nombre;
        $producto->marca = $request->marca;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;

        $producto->save();
        return redirect('/listado');
    }

    public function borrar(Request $request)
    {
        Product::destroy($request->id);
        return redirect('/listado');
    }
}
