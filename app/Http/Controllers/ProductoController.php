<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // ------------ consultas audifonos -------------------
public function audifonos_productos(Request $request)
{
    $query = Producto::query()->where('id_producto', 'like', '10%');
    $productos = $query->paginate(10);

    return view('audifono', compact('productos'));
} 
    // ------------ consultas audifonos -------------------
    
    // ------------ consultas celulares -------------------
    public function celular_productos(Request $request)
  {
    
    $query = Producto::query()->where('id_producto', 'like', '20%');

    $productos = $query->paginate(10);

    return view('audifono', compact('productos'));
} 
  // ------------ consultas celulares -------------------


    // ------------ consultas accesorios -------------------
      public function accesorio_productos(Request $request)
  {
    
    $query = Producto::query()->where('id_producto', 'like', '30%');

    $productos = $query->paginate(10);

    return view('accesorio', compact('productos'));
} 
    // ------------ consultas accesorios -------------------

    // ------------ consultas parlante -------------------
      public function parlante_productos(Request $request)
  {
    
    $query = Producto::query()->where('id_producto', 'like', '40%');

    $productos = $query->paginate(10);

    return view('parlante', compact('productos'));
} 
    // ------------ consultas parlante -------------------

     // ------------ consultas parlante -------------------
      public function cargador_productos(Request $request)
  {
    
    $query = Producto::query()->where('id_producto', 'like', '50%');

    $productos = $query->paginate(10);

    return view('cargador', compact('productos'));
} 
    // ------------ consultas parlante -------------------} 
}   

