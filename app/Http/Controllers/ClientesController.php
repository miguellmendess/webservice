<?php

namespace App\Http\Controllers;

use App\Cliente;

class ClientesController extends Controller
{
    public function index(){
        die("a");
        return Cliente::all();
    }
}
