<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Internet;

class Internet extends Model
{
  protected $table="Internet";

  protected $primaryKey = 'id';

  protected $fillable = [
      'nombre',
      'precio',
      'cantMB',
  ];

  public function servicio(){
    return $this->hasMany('App\Servicios','Internet_id','id');
  }
}
