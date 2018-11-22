<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PlanCanal;
use App\User;

class RegistroController extends Controller
{
    public function index(){
        return view('registrar.registrar');
    }

    // public function crear(Request $request){
    //     $registro = New Registro();
    //     $usuario->email = $request->email;
    //     $usuario->password = bcrypt($request->password);
    //     $usuario->nombre = $request->nombre;
    //     $usuario->apellido = $request->apellido;
    //     $usuario->cedula = $request->cedula;
    //     $usuario->direccion = $request->direccion;
    //     $usuario->Rol_id = $request->rol;
    //     $usuario->save();

    //     return redirect()->route('registro');
    // }
}
