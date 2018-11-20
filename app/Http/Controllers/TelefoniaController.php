<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Telefonia;

class TelefoniaController extends Controller
{
  public function index(){
    $planes = Telefonia::orderBy('nombre','asc')->paginate(10);
// dd($planes);
    return view('telefonia.telefonia')->with('planes', $planes);
  }

  public function crear(Request $request){
    $telefonia = New Telefonia();
    $telefonia->nombre = $request->NombrePlan;
    $telefonia->precio = $request->Precio;
    $telefonia->cantMin = $request->CantidadMin;
    $telefonia->save();

    return redirect()->route('telefonia');
  }

  public function editar(Request $request, $id){

    $telefonia = Telefonia::find($id);
    $telefonia->nombre = $request->NombrePlan;
    $telefonia->precio = $request->Precio;
    $telefonia->cantMin = $request->CantidadMin;
    $telefonia->save();

    return redirect()->route('telefonia');
  }

  public function borrar($id){
    $telefonia = Telefonia::find($id);
    $telefonia->delete();

    return redirect()->route('telefonia');
  }
}
