<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = ['genero_id','nombre','apellido', 'ci','celular','correo', 'direccion'];

    function generos()
    {
        // return $this->belongsTo(genero::class);
        return $this->belongsTo('App\Models\genero', 'genero_id', 'id');
    }
}
