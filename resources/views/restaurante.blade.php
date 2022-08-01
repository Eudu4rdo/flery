@extends('PageTemplates.PageFull')

@section('content')
<div class="informacao">
    @if (isset($data_view['restaurantes']))
        <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">{{ $data_view['restaurantes']->nome }}</h5>
              <p class="card-text">Descrição: {{ $data_view['restaurantes']->descricao}} </p>
              <p class="card-text"><small class="text-muted">Tel: {{ $data_view['restaurantes']->telefone}}     Email: {{  $data_view['restaurantes']->email }}</small></p>
              <p class="card-text"><small class="text-muted">{{ $data_view['restaurantes']->endereco }}</small></p>
            </div>
        </div>
    @endif
</div>


<div class="cardapio">
    <h2 style="text-align: center">Itens Disponiveis:</h2>
    @if (isset($data_view['cardapio']))
    <section class="cards">
        @foreach ($data_view['cardapio'] as $item)
        <article>
            <img class="article-img" src="https://static8.depositphotos.com/1094859/862/v/600/depositphotos_8627584-stock-illustration-hamburger.jpg" alt=" " />
            <h3 style="text-align: center">{{ $item->nome }}</h3>
            <p style="margin-left: 2%">Descrição: {{ $item->descricao}}</p>
            <p style="text-align: right; margin-right: 2%">R$ {{ $item->preco }}</p>
        </article>
        @endforeach
    </section>
    @endif
</div>
    
@endsection