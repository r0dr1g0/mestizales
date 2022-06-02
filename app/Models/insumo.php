<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumo extends Model
{
    use HasFactory;
    protected $table = 'insumos';
    protected $fillable = ['catInsumo_id','tipoMedida_id','proveedor_id','nombre','precio','descripcion'];

    function categoriainsumo()
    {
        return $this->belongsTo('App\Models\categoriaInsumo', 'catInsumo_id', 'id');
    }
    function tipomedida()
    {
        return $this->belongsTo('App\Models\tipoMedida', 'tipoMedida_id', 'id');
    }
    function proveedor()
    {
        return $this->belongsTo('App\Models\proveedor', 'proveedor_id', 'id');
    }
}
