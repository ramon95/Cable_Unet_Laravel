<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Servicio;

class Telefonia extends Model
{
  protected $table="Telefonia";

  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre',
      'precio',
      'cantMin',
  ];

  public function servicio(){
    return $this->hasMany('App\Servicios','Telefonia_id','id');
  }
}
