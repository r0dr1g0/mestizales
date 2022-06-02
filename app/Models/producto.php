<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['catProducto_id','clasProducto_id','nombre','precio', 'descripcion','estado'];

    function categoriaproducto()
    {
        // return $this->belongsTo(catProducto::class);

        // Relacion  uno a muchos  (inversa)
        // return $this->belongsTo('App\Models\catProducto');
        return $this->belongsTo('App\Models\catProducto', 'catProducto_id', 'id');

    }

    function clasificacionproducto()
    {
        // return $this->belongsTo(clasProducto::class);

        // Relacion  uno a muchos  (inversa)
        // return $this->belongsTo('App\Models\clasProducto');
        return $this->belongsTo('App\Models\clasProducto', 'clasProducto_id', 'id');

    }
}
