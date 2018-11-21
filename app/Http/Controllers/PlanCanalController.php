<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Canal;
use App\PlanCanal;

class PlanCanalController extends Controller
{
  public function index(){
    $planes = PlanCanal::orderBy('nombre','asc')->paginate(10);
    $canales = Canal::orderBy('nombre','asc')->get();

    return view('planCanal.planCanal')->with('planes', $planes)->with('canales', $canales);
  }

  public function crear(Request $request){
    $internet = New PlanCanal();
    $internet->nombre = $request->NombrePlan;
    $internet->precio = $request->Precio;
    $internet->cantMB = $request->CantidadMB;
    $internet->save();

    return redirect()->route('internet');
  }

  public function editar(Request $request, $id){

    $internet = PlanCanal::find($id);
    $internet->nombre = $request->NombrePlan;
    $internet->precio = $request->Precio;
    $internet->cantMB = $request->CantidadMB;
    $internet->save();

    return redirect()->route('internet');
  }

  public function borrar($id){
    $internet = PlanCanal::find($id);
    $internet->delete();

    return redirect()->route('internet');
  }
}
