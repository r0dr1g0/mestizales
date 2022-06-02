<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasProducto extends Model
{
    use HasFactory;
    protected $table = 'clasProductos';
    protected $fillable = ['nombre','estado'];

        // Relacion de uno  a muchos ES LO UEVO QUE CREAMOS
        // Public function productos()
        // {
        //     return $this->hasMany(producto::class);
        // }

}
