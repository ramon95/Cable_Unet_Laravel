<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Canal;
use App\Dia;

class DiaSemana extends Model
{
  protected $table="DiaSemanas";

  protected $primaryKey = 'id';

  public function canal(){
    return $this->belongsTo('App\Canal','Canales_id');
  }

  public function dia(){
    return $this->belongsTo('App\Dia','Dias_id');
  }
}
