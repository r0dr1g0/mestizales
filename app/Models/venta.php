<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    protected $fillable = ['cliente_id','producto_id','metodoPago_id','cantidadVenta', 'total'];

    function clientes()
    {
        return $this->belongsTo('App\Models\cliente', 'cliente_id', 'id');
    }

    function productos()
    {
        return $this->hasMany('App\Models\producto', 'producto_id', 'id');
    }

    function metodopagos()
    {
        return $this->belongsTo('App\Models\metodoPago', 'metodoPago_id', 'id');
    }
}
