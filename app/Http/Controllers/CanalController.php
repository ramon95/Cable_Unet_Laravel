<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dia;
use App\Hora;
use App\Canal;
use App\HoraDia;
use App\DiaSemana;

class CanalController extends Controller
{
  public function index(){
    $planes = Canal::orderBy('nombre','asc')->paginate(10);
    $dias = Dia::all();
    $horas = Hora::all();

    return view('cable.canales')->with('planes', $planes)->with('dias', $dias)->with('horas', $horas);
  }

  public function crear(Request $request){
    $canal = New Canal();
    $canal->nombre = $request->NombrePlan;
    $canal->precio = $request->Precio;
    $canal->save();

    foreach ($request->Dias as $dia) {
      $diaSemana = new DiaSemana();
      $diaSemana->Canales_id = $canal->id;
      $diaSemana->Dias_id = $dia;
      $diaSemana->save();
    }

    foreach ($request->Horas as $hora) {
      $horaDia = new HoraDia();
      $horaDia->Canales_id = $canal->id;
      $horaDia->Horas_id = $hora;
      $horaDia->save();
    }

    return redirect()->route('canal');
  }

  public function editar(Request $request, $id){

    $canal = Canal::find($id);
    $canal->nombre = $request->NombrePlan;
    $canal->precio = $request->Precio;
    $canal->save();

    return redirect()->route('canal');
  }

  public function borrar($id){
    $canal = Internet::find($id);
    $canal->delete();

    return redirect()->route('canal');
  }
}
