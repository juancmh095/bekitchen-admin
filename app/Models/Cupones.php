<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupones extends Model
{
    use HasFactory;

    protected $table = 'cupones';

    protected $fillable = [
        'procentaje', 'importe', 'limite_fecha', 'canjes', 'codigo', 'importe_minimo'
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
