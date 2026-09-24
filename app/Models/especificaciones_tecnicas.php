<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especificaciones_tecnicas extends Model
{
    use HasFactory;

    // Ajustado al nombre real de tu tabla en la base de datos
    protected $table = 'especificacion_tecnica';

    protected $primaryKey = 'id_especificacion';

    protected $fillable = [
        'id_producto',
        'clave',
        'valor',
        'categoria_esp',
    ];
}