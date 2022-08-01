<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\Restaurants;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllRestaurantes(){
        return Restaurants::get();
    }

    public function getById($id){
        $dado['restaurante']=   Restaurants::getById($id);
        $dado['cardapio']   =   Cardapio::get()->where('idRestaurante', '=', $id);
        return $dado;
    }

    public function getByText(Request $request){
        return Cardapio::getByText($request->text);
    }
}
