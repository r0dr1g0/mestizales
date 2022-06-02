<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoMedida extends Model
{
    use HasFactory;
    protected $table = 'tipomedidas';
    protected $fillable = ['nombre','estado'];
}
