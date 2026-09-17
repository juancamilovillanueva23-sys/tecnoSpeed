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
}
