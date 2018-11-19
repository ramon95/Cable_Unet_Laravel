<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\PlanCanal;
use App\Canal;

class ListaCanal extends Model
{
  protected $table="ListaCanales";

  protected $primaryKey = 'id';

  public function planCanal(){
    return $this->belongsTo('App\PlanCanal','PlanCanales_id');
  }

  public function canal(){
    return $this->belongsTo('App\Canal','Canales_id');
  }


}
