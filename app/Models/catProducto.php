<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catProducto extends Model
{
    use HasFactory;
    protected $table = 'catProductos';
    protected $fillable = ['nombre','estado'];

    // Relacion de uno  a muchos  ES LO NUEVO QUE CREAMOS
    // Public function productos()
    // {
    //     return $this->hasMany(producto::class);
    // }
}
