
<div class="col-lg-12 header" style="background-color: rgb(255, 165, 0)">
  <div class="d-flex">
    <div class="col-lg-2">
      <a class="navbar-brand" href="/">
        <img src="{{asset('img/logoFlery.png')}}" alt="..." height="50">
      </a>
    </div>
    
  <div class="col-lg-8 text-uppercase"ss>
    <nav class="navbar navbar-expand-lg justify-content-around d-flex">
      <form method="GET" action="{{ route('search') }}">
        <div class="input-group" style="min-width: 100%;">
              <input type="input" class="form-control rounded" placeholder="Busca" aria-label="Busca" aria-describedby="search-addon" id="text" name="text" style="min-width: 50%"/>
              <button type="submit" class="btn btn-light" style="margin-left: 1%">Busca</button>
        </div>
    </form>
    </nav>
    <nav class="navbar navbar-expand-lg justify-content-around d-flex">
      
    </nav>
  </div>
  <div class="col-lg-2  justify-content-center" >
        @auth
        <div class="dropdown">
                <button  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border-color: transparent; vertical-align: center;">
                    {{-- <p>Bem vindo {{ Auth::user()->name }}</p> --}}
                    <img  src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" style="border-radius: 50%;"/>
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                              this.closest('form').submit();">
                  {{ __('Sair') }}
                  </a>
                </form>
            </div>
        </div>
        @else
        <div class="ltn__main-menu divLogin" style="margin-top: 2%;">
            <a href="/login">Login</a>
        </div>
        @endauth
    </div>
    
  </div>  
</div>

