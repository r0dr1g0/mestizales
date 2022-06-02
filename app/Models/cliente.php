<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['persona_id','nit','razonSocial'];

    function personita()
    {
        // return $this->belongsTo(persona::class);
        return $this->belongsTo('App\Models\persona', 'persona_id');
    }
}
