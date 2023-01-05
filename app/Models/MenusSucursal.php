<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenusSucursal extends Model
{
    use HasFactory;

    protected $table = 'menu_sucursal';

    protected $fillable = [
        'id_menu', 'id_sucursal'
    ];

    public function menuSucursal()
    {
        return $this->belongsTo(MenusSucursal::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
