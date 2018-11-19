<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Canal;
use App\Hora;

class HoraDia extends Model
{
  protected $table="HoraDias";

  protected $primaryKey = 'id';

  public function canal(){
    return $this->belongsTo('App\Canal','Canales_id');
  }

  public function hora(){
    return $this->belongsTo('App\Hora','Horas_id');
  }
}
