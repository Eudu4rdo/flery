@extends('PageTemplates.PageFull')

@section('content')
<div style="margin-top: 20px">
    @if (isset($data_view['restaurantes']))
    <h2 class="title_pag">Restaurantes disponiveis:</h2>
    <section class="cards">
        @foreach ($data_view['restaurantes'] as $restaurant)
            <article>
               <a href="/restaurante/{{$restaurant->id}}"><img class="article-img" src="{{asset('img/logoFlery.png')}}" /></a> 
               <h3 class="article-title">
                    <a href="/restaurante/{{$restaurant->id}}">{{$restaurant->nome}}</a>
                </h3>
            </article>
        @endforeach
    </section>
    @endif

    @if (isset($data_view['results']))
    <h2 class="title_pag"><div id="text_search"></div></h2><br>
    <section class="cards">
        @foreach ($data_view['results']  as $result)
        <article>
            <img class="article-img" src="https://static8.depositphotos.com/1094859/862/v/600/depositphotos_8627584-stock-illustration-hamburger.jpg" alt=" " />
            <h3 style="text-align: center">{{ $result->nomePrato }}</h3>
            <div style="margin-left: 2%">Descrição: {{ $result->descricaoPrato}}</div>
            <div style="text-align: right; margin-right: 2%">{{ format_currency($result->precoPrato) }}</div>
            <div style="margin-left: 2%"><strong>Restaurante: {{ $result->nomeRestaurante}}</strong></div>
        </article>
        @endforeach
    </section>
    @endif
</div>

@stop