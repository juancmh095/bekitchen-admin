<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
        'nombre', 'id_negocio','status'
    ];

    public function menus()
    {
        return $this->belongsTo(Menus::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
