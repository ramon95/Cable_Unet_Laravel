<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Internet;

class InternetController extends Controller
{
    public function index(){
      $planes = Internet::orderBy('nombre','asc')->paginate(10);

      return view('internet.internet')->with('planes', $planes);
    }

    public function crear(Request $request){
      $internet = New Internet();
      $internet->nombre = $request->NombrePlan;
      $internet->precio = $request->Precio;
      $internet->cantMB = $request->CantidadMB;
      $internet->save();

      return redirect()->route('internet');
    }

    public function editar(Request $request, $id){

      $internet = Internet::find($id);
      $internet->nombre = $request->NombrePlan;
      $internet->precio = $request->Precio;
      $internet->cantMB = $request->CantidadMB;
      $internet->save();

      return redirect()->route('internet');
    }

    public function borrar($id){
      $internet = Internet::find($id);
      $internet->delete();

      return redirect()->route('internet');
    }
}
