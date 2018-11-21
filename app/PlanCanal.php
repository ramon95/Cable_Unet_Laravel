<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Servicio;
use App\ListaCanal;

class PlanCanal extends Model
{
  protected $table="PlanCanales";

  protected $primaryKey = 'id';

  protected $fillable = [
      'descripcion',
      'precio',
  ];

  public function servicio(){
    return $this->hasMany('App\Servicios','PlanCanales_id','id');
  }

  public function listaCanales(){
    return $this->hasMany('App\ListaCanal','PlanCanales_id','id');
  }
}
