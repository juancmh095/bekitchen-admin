<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;

    protected $table = 'negocio';

    protected $fillable = [
        'contacto', 'email', 'telefono', 'nombre_comercial', 'alias', 'tipo', 'estado', 'pais', 'municipio', 'calle', 'entre', 'cp', 'foto'
    ];

    public function negocio()
    {
        return $this->belongsTo(Negocio::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
