<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ListaCanal;
use App\HoraDia;
use App\DiaSemana;

class Canal extends Model
{
  protected $table="Canal";

  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre',
      'precio',
  ];

  public function listaCanales(){
    return $this->hasMany('App\ListaCanal','Canales_id','id');
  }

  public function horasDias(){
    return $this->hasMany('App\HoraDia','Canales_id','id');
  }

  public function diaSemanas(){
    return $this->hasMany('App\DiaSemana','Canales_id','id');
  }
}
