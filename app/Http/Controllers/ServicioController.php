<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servico;
use App\User;

class ServicioController extends Controller
{
  public function index(){
    $usuarios = User::orderBy('cedula','asc')->get();

    return view('servicio.servicio')->with('usuarios', $usuarios);
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
