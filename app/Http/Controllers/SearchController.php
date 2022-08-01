<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;

class SearchController extends Controller
{
    public function view(Request $request)
    {
        //$broker       = new BrokerService();
        //Inicializações
        $data_view['page_type']     = 'broker_list';
        $data_view['page']          = 'broker_home';
        $data_view['restaurantes']  = Restaurants::getAll();
        //Conteúdo para a View
        /*$data_view['brokers']             = $broker->getBrokes();
        $data_view['breadcrumb']          = $broker->getBreadCrumb();
        $data_view['SEOtitle']            = 'Corretores Parceiros - Leilão Imóvel';*/
        return view('welcome', ['data_view' => $data_view]);
    }
}
