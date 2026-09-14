<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    public $timestamps = false; // Desactiva created_at y updated_at si la migración no los tiene

    protected $fillable = [
        'id_producto',
        'nombre_pro',
        'descripcion',
        'valor_pro',
        'marca',
        'id_imagen',
        'id_categoria',
        'id__stock',
        'id_cupon',
    ];

    /**
     * Scope para filtrar por categoría si id_categoria representa Celulares (ej. ID 1)
     */
    public function scopeCelulares($query, $idCategoria = 1)
    {
        return $query->where('id_categoria', $idCategoria);
    }
}