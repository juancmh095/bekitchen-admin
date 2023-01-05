<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombosProductos extends Model
{
    use HasFactory;

    protected $table = 'combos_productos';

    protected $fillable = [
        'id_combo', 'id_producto', 'precio'
    ];

    public function combosProductos()
    {
        return $this->belongsTo(CombosProductos::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
