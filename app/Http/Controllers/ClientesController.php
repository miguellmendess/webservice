<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        return Cliente::all();
    }

    public function list($id){
        return Cliente::find($id);
    }

    public function inclusao(Request $request){
        $cliente = Cliente::create($request->all());

        return response()->json($cliente,201);
    }

    public function update(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();

        return response()->json("Atualizado",200);
    }

    public function delete($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return response()->json($cliente,204);
    }
}
