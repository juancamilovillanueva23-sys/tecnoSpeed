<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $query = Producto::query();

        if ($request->filled('query')) {
            $query->where('nombre_pro', 'like', '%' . $request->query('query') . '%');
        }

        // Obtener los productos de la base de datos
        $productos = $query->paginate(12);

        // Retornar la vista 'celular' (o 'inicio', según el nombre exacto de tu archivo blade)
        return view('celular', compact('productos'));
        return view('cargador',compact('productos'));
        return view('accesorio',compact('productos'));
    }
}