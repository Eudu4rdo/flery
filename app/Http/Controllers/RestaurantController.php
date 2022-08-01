<?php

namespace App\Http\Controllers;

use App\Models\Restaurants;
use App\Models\Cardapio;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function view(Int $id)
    {
        //Inicializações
        $data_view['page_type']     = 'broker_list';
        $data_view['page']          = 'broker_home';
        $data_view['id']            = $id;
        $data_view['restaurantes']  = Restaurants::getById($id);
        $data_view['cardapio']      = Cardapio::get()->where('idRestaurante', '=', $id);
        //dd($data_view['restaurantes']->nome);
        //Conteúdo para a View
        /*$data_view['brokers']             = $broker->getBrokes();
        $data_view['breadcrumb']          = $broker->getBreadCrumb();
        $data_view['SEOtitle']            = 'Corretores Parceiros - Leilão Imóvel';*/
        return view('restaurante', ['data_view' => $data_view]);
    }
}
