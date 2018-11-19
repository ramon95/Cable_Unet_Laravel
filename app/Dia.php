<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
  protected $table="Dias";

  protected $primaryKey = 'id';

  protected $fillable = [
      'descripcion',
  ];

  public function diaSemanas(){
    return $this->hasMany('App\User','Dias_id','id');
  }
}
