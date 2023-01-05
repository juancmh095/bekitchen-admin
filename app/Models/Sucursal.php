<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursales';

    protected $fillable = [
        'logo', 'nombre', 'direccion', 'telefono', 'correo', 'menu', 'lat', 'lng', 'delivery', 'tienda', 'id_negocio'
    ];

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
