<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre', 'sku', 'peso', 'precio', 'descripcion', 'categoria', 'etiquetas', 'media', 'id_negocio'
    ];

    public function productos()
    {
        return $this->belongsTo(Productos::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
