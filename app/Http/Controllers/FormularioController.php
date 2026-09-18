<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
    
    return view('formularios.formulario');
    }


    public function procesarFormulario(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer|min:18',
        ]);
        

        return back()->with('success', '¡Formulario enviado con éxito!');
    }
}

