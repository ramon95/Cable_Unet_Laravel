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
    $planCanal->descripcion = $request->NombrePlan;
    $planCanal->precio = $request->Precio;
    $planCanal->save();

    if ($planCanal->listaCanales->count() == sizeof($request->Canales)) {
      foreach ($planCanal->listaCanales as $i => $listaCanales) {
        $listaCanales->Canales_id = $request->Canales[$i];
        $listaCanales->save();
      }
    }
    elseif ($planCanal->listaCanales->count() < sizeof($request->Canales)) {
      for ($i=0; $i < $planCanal->listaCanales->count(); $i++) {
        $planCanal->listaCanales[$i]->Canales_id = $request->Canales[$i];
        $planCanal->listaCanales[$i]->save();
      }
      for ($i=$planCanal->listaCanales->count(); $i < sizeof($request->Canales); $i++) {
        $listaCanal = new ListaCanal();
        $listaCanal->PlanCanales_id = $planCanal->id;
        $listaCanal->Canales_id = $request->Canales[$i];
        $listaCanal->save();
      }
    }
    elseif ($planCanal->listaCanales->count() > sizeof($request->Canales)) {
      for ($i=0; $i < sizeof($request->Canales); $i++) {
        $planCanal->listaCanales[$i]->Canales_id = $request->Canales[$i];
        $planCanal->listaCanales[$i]->save();
      }
      for ($i=sizeof($request->Canales); $i < $planCanal->listaCanales->count(); $i++) {
        $planCanal->listaCanales[$i]->delete();
      }
    }

    return redirect()->route('planCanal');
  }

  public function borrar($id){
    $planCanal = PlanCanal::find($id);
    $planCanal->delete();

    return redirect()->route('planCanal');
  }
}
