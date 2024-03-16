<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index(Request $req) {
        $varTemas = 
        [[ "tema"=>"Interface acessivel", "titulo" => "App mobile com direitos da pessoa deficiente"],
        [ "tema"=>"Pedofilia", "titulo" => "App mobile com orientações gerais aos pais" ]];
        return view("index",compact('varTemas'));
    }
}
