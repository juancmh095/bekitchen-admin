<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenusCombos extends Model
{
    use HasFactory;

    protected $table = 'menu_combos';

    protected $fillable = [
        'id_menu', 'id_combo'
    ];

    public function menuCombos()
    {
        return $this->belongsTo(MenusCombos::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
