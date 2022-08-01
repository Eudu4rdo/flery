@extends('PageTemplates.PageFull')

@section('content')
<div style="margin-top: 20px">
    @if (isset($data_view['restaurantes']))
    <section class="cards">
        @foreach ($data_view['restaurantes'] as $restaurant)
            <article>
                <img class="article-img" src="{{asset('img/logoFlery.png')}}" />
                <h3 class="article-title">
                    <a href="/restaurante/{{$restaurant->id}}">{{$restaurant->nome}}</a>
                </h3>
            </article>
        
        {{-- <div class="row" style="position: relative;">
            <div class="card" style="min-width: 18rem; max-width: 18rem;; margin-right: 1rem">
                <div class="card-body">
                    <h5 class="card-title"><a href="/restaurante/{{$restaurant->id}}">{{$restaurant->nome}}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$restaurant->descricao}}</h6>
                    <p class="card-text">{{$restaurant->telefone}}</p>
                    <p class="card-text">{{$restaurant->email}}</p>
                </div>
            </div>   
        </div>  --}}
        @endforeach
    </section>
@endif
</div>

    
@stop