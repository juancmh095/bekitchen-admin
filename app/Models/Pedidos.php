<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'id_usuario', 'productos', 'fecha', 'tipoDelivery', 'mPago', 'direccion', 'subtotal', 'descuento', 'total', 'cupon', 'tienda', 'status', 'comentarios', 'created_at', 'updated_at'
    ];
}
