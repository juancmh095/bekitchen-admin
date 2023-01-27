<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupones extends Model
{
    use HasFactory;

    protected $table = 'cupones';

    protected $fillable = [
        'porcentaje', 'importe', 'limite_fecha', 'canjes', 'codigo', 'importe_minimo','id_negocio'
    ];

    public function cupones()
    {
        return $this->belongsTo(Cupones::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
