<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Importación del modelo independiente

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;

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
     * Relación con las especificaciones técnicas
     */
    public function especificaciones()
    {
        return $this->hasMany(especificaciones_tecnicas::class, 'id_producto', 'id_producto');
    }
}