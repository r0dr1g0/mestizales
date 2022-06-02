<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * Los atributos que son asignables en masa
     *
     * @var string[]
     */
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'persona_id',
        'email',
        'username',
        'password',
        'estado',
    ];

    /**
     * Los atributos que deben estar ocultos para la serializacion
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los atributos que deben emitirse
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    function personita()
    {
        return $this->belongsTo('App\Models\persona', 'persona_id');
        // return $this->belongsTo(persona::class);

    }
}
