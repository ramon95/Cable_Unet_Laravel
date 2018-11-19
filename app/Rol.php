<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Rol extends Model
{
  protected $table="Rol";

  protected $primaryKey = 'id';

  protected $fillable = [
      'descripcion',
  ];

  public function usuario(){
    return $this->hasMany('App\User','Rol_id','id');
  }
}
