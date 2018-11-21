<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Canal;
use App\PlanCanal;
use App\ListaCanal;

class PlanCanalController extends Controller
{
  public function index(){
    $planes = PlanCanal::orderBy('descripcion','asc')->paginate(10);
    $canales = Canal::orderBy('nombre','asc')->get();
// $p = PlanCanal::find(1);dd($p->listaCanales);
    return view('planCanal.planCanal')->with('planes', $planes)->with('canales', $canales);
  }

  public function crear(Request $request){
    $planCanal = New PlanCanal();
    $planCanal->descripcion = $request->NombrePlan;
    $planCanal->precio = $request->Precio;
    $planCanal->save();

    foreach ($request->Canales as $canal) {
      $listaCanal = new ListaCanal();
      $listaCanal->PlanCanales_id = $planCanal->id;
      $listaCanal->Canales_id = $canal;
      $listaCanal->save();
    }

    return redirect()->route('planCanal');
  }

  public function editar(Request $request, $id){

    $planCanal = PlanCanal::find($id);
    $planCanal->nombre = $request->NombrePlan;
    $planCanal->precio = $request->Precio;
    $planCanal->cantMB = $request->CantidadMB;
    $planCanal->save();

    return redirect()->route('planCanal');
  }

  public function borrar($id){
    $planCanal = PlanCanal::find($id);
    $planCanal->delete();

    return redirect()->route('planCanal');
  }
}
