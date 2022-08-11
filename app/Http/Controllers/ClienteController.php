<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $client = Cliente::all();
        return $client;
    }

    public function store(Request $request)
    {
       $client = new Cliente();
       $client->identificacion_Cliente = $request->description;
       $client->nombre_Clie = $request->nombre_Clie;
       $client->apellido_Clie = $request->apellido_Clie;
       $client->fecha_Nac_Clie = $request-> fecha_Nac_Clie;
       $client->telefono_Clie = $request-> telefono_Clie;
       $client->direccion_Clie = $request-> direccion_Clie;
       $client->estado_Clie = $request-> estado_Clie;

       $client->save();
    }

    public function show($id)
    {
        $client = Cliente::find($id);
        return $client;
    }

    public function update(Request $request, $id)
    {
       $client = Cliente::findOrfail($request->id);
       $client->identificacion_Cliente = $request->description;
       $client->nombre_Clie = $request->nombre_Clie;
       $client->apellido_Clie = $request->apellido_Clie;
       $client->fecha_Nac_Clie = $request-> fecha_Nac_Clie;
       $client->telefono_Clie = $request-> telefono_Clie;
       $client->direccion_Clie = $request-> direccion_Clie;
       $client->estado_Clie = $request-> estado_Clie;

       $client->save();
       return $client;
    }

    public function destroy($id)
    {
       $client = Cliente::destroy($id);
       return $client;
    }
}
