<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Servico;
use App\Internet;
use App\Telefonia;
use App\PlanCanal;

class ServicioController extends Controller
{
  public function index(){
    $usuarios = User::orderBy('cedula','asc')->get();
    $internets = Internet::orderBy('nombre','asc')->get();
    $telefonias = Telefonia::orderBy('nombre','asc')->get();
    $planCanales = PlanCanal::orderBy('descripcion','asc')->get();

    return view('servicio.servicio')
         ->with('usuarios', $usuarios)
         ->with('internets', $internets)
         ->with('telefonias', $telefonias)
         ->with('planCanales',$planCanales);
  }

  public function crear(Request $request){
    $internet = New Servico();
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
