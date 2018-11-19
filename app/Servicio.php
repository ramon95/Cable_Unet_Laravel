<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Internet;
use App\Telefonia;
use App\PlanCanal;

class Servicio extends Model
{
  protected $table="Servicios";

  protected $primaryKey = 'id';

  protected $fillable = [
      'fechaInicio',
      'total',
      'fechaCorte',
  ];

  public function usuario(){
    return $this->belongsTo('App\User','Usuario_id');
  }

  public function telefonia(){
    return $this->belongsTo('App\Telefonia','Telefonia_id');
  }

  public function internet(){
    return $this->belongsTo('App\Internet','Internet_id');
  }

  public function planCanal(){
    return $this->belongsTo('App\PlanCanal','PlanCanales_id');
  }
}
