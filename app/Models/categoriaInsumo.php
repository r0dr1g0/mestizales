<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriaInsumo extends Model
{
    use HasFactory;
    protected $table = 'catinsumos';
    protected $fillable = ['nombre'];
}
