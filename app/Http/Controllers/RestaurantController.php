<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use App\Models\Cardapio;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function view(Int $id)
    {
        $data_view['id']            = $id;
        $data_view['restaurantes']  = Restaurants::getById($id);
        $data_view['cardapio']      = Cardapio::get()->where('idRestaurante', '=', $id);
        //dd($data_view['cardapio']);
        if(isset($data_view['restaurantes'])){
            return view('restaurante', ['data_view' => $data_view]);
        }else{
            return abort(404);
        }
    }
}
