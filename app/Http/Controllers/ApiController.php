<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use App\Models\Restaurants;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllRestaurantes(){
        return response(Restaurants::get()->toJson(JSON_PRETTY_PRINT),200);
    }

    public function getById($id){
        if(Restaurants::where('id', $id)->exists()){
            $dado['restaurante']=   Restaurants::getById($id);
            $dado['cardapio']   =   Cardapio::get()->where('idRestaurante', '=', $id);
            return response(json_encode($dado), 200);
        }else{
            return response()->json([
                "message" => "Restaurante nao existe"
              ], 404);
        }
            
    }

    public function getByText(Request $request){
        if(!empty(Cardapio::getByText($request->text))){
            $cardapio=Cardapio::getByText($request->text);
            return response(json_encode($cardapio), 200);
        }else{
            return response()->json([
                "message" => "nao foi encontrado nenhum item com o texto selecionado"
            ]);
        }
        
    }
}
