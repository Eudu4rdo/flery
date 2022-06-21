
<div class="col-lg-12 justify-content-center header" style="background-color: rgb(255, 165, 0)">
  <div style="margin-left: 5%; display: flex;">
    <a class="navbar-brand" href="/">
      <img src="{{asset('img/logoFlery.png')}}" alt="..." height="50">
    </a>

    <div class="nav">
      <ul>
        <li><a href="/">Promoções exclusivas</a></li>
        <li><a href="/">Sobre Nós</a></li>
        <li><a href="/">Seja um Vendedor Parceiro</a></li>
        {{-- nav bar seleciona cidade --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Selecione sua cidade
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item selectCity" href="#">Franca-SP</a>
            <a class="dropdown-item selectCity" href="#">Ribeirão Preto-SP</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item selectCity" href="#">Uberaba-MG</a>
            <a class="dropdown-item selectCity" href="#">Uberlândia-MG</a>
          </div>
        </li>
      </ul>
        
    </div>
  </div>
    

</div>

