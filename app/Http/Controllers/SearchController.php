<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;
use App\Models\Restaurants;

class SearchController extends Controller
{
    public function view(Request $request)
    {
        //Inicializações
        $data_view['restaurantes']  = Restaurants::getAll();
        
        return view('welcome', ['data_view' => $data_view]);
        //return Restaurants::get();
    }

    public function search(Request $request)
    {
        //Inicializações
        $data_view['results']  = Cardapio::getByText($request->text);
        
        return view('welcome', ['data_view' => $data_view]);
        //return Restaurants::get();
    }
}
