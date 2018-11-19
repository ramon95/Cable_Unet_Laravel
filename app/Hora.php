<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
  protected $table="Horas";

  protected $primaryKey = 'id';

  protected $fillable = [
      'descripcion',
  ];

  public function diaHoras(){
    return $this->hasMany('App\User','Horas_id','id');
  }
}
