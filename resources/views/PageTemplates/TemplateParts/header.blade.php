
<div class="col-lg-12 header" style="background-color: rgb(255, 165, 0)">
  <div class="d-flex">
    <div class="col-lg-3">
      <a class="navbar-brand" href="/">
        <img src="{{asset('img/logoFlery.png')}}" alt="..." height="50">
      </a>
    </div>
    
  <div class="col-lg-9 text-uppercase">
    <nav class="navbar navbar-expand-lg justify-content-around d-flex">
      <form method="GET" action="{{ route('search') }}">
        <div class="input-group">
              <input type="input" class="form-control rounded" placeholder="Busca" aria-label="Busca" aria-describedby="search-addon" id="text" name="text" />
              <button type="submit" class="btn btn-outline-primary" style="margin-left: 1%">Busca</button>
        </div>
    </form>
    </nav>
  </div>
    
  </div>  
  

</div>

