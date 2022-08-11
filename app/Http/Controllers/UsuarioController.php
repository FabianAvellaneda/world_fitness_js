<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function store(Request $request)
    {
       $usuarios = new Usuario();
       $usuarios->identificacion_Usuario = $request->identificacion_Usuario;
       $usuarios->user = $request->user;
       $usuarios->password = $request-> password;

       $usuarios->save();
    }

    public function show($id)
    {
        $usuarios = Usuario::find($id);
        return $usuarios;
    }


    public function update(Request $request, $id)
    {
        Usuario::findOrfail($request->id);
        $usuarios->identificacion_Usuario = $request->identificacion_Usuario;
        $usuarios->user = $request->user;
        $usuarios->password = $request-> password;
 
        $usuarios->save();
        return $usuarios;
    }

    public function destroy($id)
    {
        $usuarios = Usuario::destyoy($id);
       return $usuarios;
    }
}
