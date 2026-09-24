<?php

namespace App\Http\Controllers;

use App\Models\especificaciones_tecnicas;
use Illuminate\Http\Request;

class especificaciones_tecnicasController extends Controller
{
    /**
     * Obtener especificaciones por el ID de producto
     */
    public function porProducto($id_producto)
    {
        $especificaciones = especificaciones_tecnicas::where('id_producto', $id_producto)->get();

        return response()->json($especificaciones);
    }
}