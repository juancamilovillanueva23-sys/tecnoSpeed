<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function audifonos_productos(Request $request)
    {
        $productos = $this->productosFiltrados($request, '10')->paginate(10)->withQueryString();

        return view('audifono', compact('productos'));
    }

    public function celular_productos(Request $request)
    {
        $productos = $this->productosFiltrados($request, '20')->paginate(10)->withQueryString();

        return view('celular', compact('productos'));
    }

    public function accesorio_productos(Request $request)
    {
        $productos = $this->productosFiltrados($request, '30')->paginate(10)->withQueryString();

        return view('accesorio', compact('productos'));
    }

    public function parlante_productos(Request $request)
    {
        $productos = $this->productosFiltrados($request, '40')->paginate(10)->withQueryString();

        return view('parlante', compact('productos'));
    }

    public function cargador_productos(Request $request)
    {
        $productos = $this->productosFiltrados($request, '50')->paginate(10)->withQueryString();

        return view('cargador', compact('productos'));
    }

    public function index(Request $request)
    {
        $productos = $this->productosFiltrados($request)->paginate(10)->withQueryString();

        return view('productos', compact('productos'));
    }

    private function productosFiltrados(Request $request, ?string $prefijo = null): Builder
    {
        $filtros = $request->validate([
            'buscar' => ['nullable', 'string', 'max:255'],
            'marca' => ['nullable', 'string', 'max:100'],
            'precio_max' => ['nullable', 'numeric', 'min:0'],
            'orden' => ['nullable', 'in:precio_asc,precio_desc,recientes'],
        ]);

        $query = Producto::query();

        if ($prefijo !== null) {
            $query->where('id_producto', 'like', $prefijo.'%');
        }

        if (! empty($filtros['buscar'])) {
            $termino = mb_strtolower($filtros['buscar']);
            $query->whereRaw('LOWER(nombre_pro) LIKE ?', ['%'.$termino.'%']);
        }

        if (! empty($filtros['marca'])) {
            $marca = trim($filtros['marca']);

            $query->where(function (Builder $query) use ($marca) {
                if (is_numeric($marca)) {
                    $query->where('marca', $marca);
                } else {
                    $termino = mb_strtolower($marca);
                    $query->whereRaw('LOWER(nombre_pro) LIKE ?', ['%'.$termino.'%'])
                        ->orWhereRaw('LOWER(descripcion) LIKE ?', ['%'.$termino.'%']);
                }
            });
        }

        if (isset($filtros['precio_max']) && $filtros['precio_max'] !== '') {
            $query->where('valor_pro', '<=', $filtros['precio_max']);
        }

        match ($filtros['orden'] ?? null) {
            'precio_asc' => $query->orderBy('valor_pro'),
            'precio_desc' => $query->orderByDesc('valor_pro'),
            'recientes' => $query->orderByDesc('id_producto'),
            default => null,
        };

        return $query;
    }

    public function buscar(Request $request)
    {
        $query = mb_strtolower($request->input('query', ''));
        $productos = Producto::whereRaw('LOWER(nombre_pro) LIKE ?', ['%'.$query.'%'])->get();

        return view('busqueda', compact('productos', 'query'));
    }

    public function ver_mas($id)
    {
        $producto = Producto::with('especificaciones_tecnicas')
            ->where('id_producto', $id)
            ->firstOrFail();

        return view('ver_mas', compact('producto'));
    }
}
