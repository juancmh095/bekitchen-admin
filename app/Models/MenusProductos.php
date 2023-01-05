<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenusProductos extends Model
{
    use HasFactory;

    protected $table = 'menu_productos';

    protected $fillable = [
        'id_menu', 'id_producto'
    ];

    public function menuProductos()
    {
        return $this->belongsTo(MenusProductos::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
