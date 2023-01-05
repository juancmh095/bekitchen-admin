<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combos extends Model
{
    use HasFactory;

    protected $table = 'combos';

    protected $fillable = [
        'nombre', 'banner', 'precio_total', 'fecha_exp'
    ];

    public function combos()
    {
        return $this->belongsTo(Combos::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
