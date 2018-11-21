<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Rol;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::orderBy('nombre','asc')->paginate(10);
        $roles = Rol::all();

        return view('usuario.usuario')->with('usuarios', $usuarios)->with('roles', $roles);
      }

      public function crear(Request $request){
        $usuario = New User();
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->cedula = $request->cedula;
        $usuario->direccion = $request->direccion;
        $usuario->Rol_id = $request->rol;
        $usuario->save();

        return redirect()->route('usuario');
      }

      public function editar(Request $request, $id){

        $usuario = User::find($id);
        $usuario->email = $request->email;
        if ($request->password) {
          $usuario->password = bcrypt($request->password);
        }
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->cedula = $request->cedula;
        $usuario->direccion = $request->direccion;
        $usuario->Rol_id = $request->rol;
        $usuario->save();

        return redirect()->route('usuario');
      }

      public function borrar($id){
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('usuario');
      }
}
