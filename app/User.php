<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Rol;

class User extends Authenticatable
{
    use Notifiable;

    protected $table="Usuarios";

    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'password',
        'nombre',
        'apellido',
        'cedula',
        'direccion',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol(){
      return $this->belongsTo('App\Rol','Rol_id');
    }

    public function servicio(){
      return $this->hasMany('App\Servicios','Usuario_id','id');
    }
}
