<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gerente;

class GerenteController extends Controller
{
    public function index()
    {
      $gerente = Gerente::all();
      return $gerente;

    }

    public function store(Request $request)
    {
      $gerente = new Gerente();
      $gerente->identificacion_Gerente = request->identificacion_Gerente; 
      $gerente->nombre_Geren = request->nombre_Geren; 
      $gerente->apellido_Geren = request->apellido_Geren; 
      $gerente->fecha_Nac_Geren = request->fecha_Nac_Geren; 
      $gerente->telefono_Geren = request->telefono_Geren; 
      $gerente->direccion_Geren = request->direccion_Geren;

      $gerente->save();

    }

    public function show($id)
    {
        $gerente = Gerente::find($id);
        return $gerente;
    }

    public function update(Request $request, $id)
    {
       $gerente = Gerente::findOrFail($request->$id);
       $gerente->identificacion_Gerente = request->identificacion_Gerente; 
       $gerente->nombre_Geren = request->nombre_Geren; 
       $gerente->apellido_Geren = request->apellido_Geren; 
       $gerente->fecha_Nac_Geren = request->fecha_Nac_Geren; 
       $gerente->telefono_Geren = request->telefono_Geren; 
       $gerente->direccion_Geren = request->direccion_Geren;

       $gerente->save();
       return $gerente;

    }

    public function destroy($id)
    {
       $gerente = Gerente::destyoy($id);
       return $gerente;
    }
}
