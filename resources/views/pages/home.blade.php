@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
<div class="jumbotron bg-primary">
    <div style="font-family: arial;" class="text-center">
      <h1 class="display-4 text-light" style=" font-family: arial; font-weight: bold;">HELMIDEV</h1>
      <h5 class="display-5" style="font-family: arial; font-weight: bold; margin: 0px;">Mobile Esport Ensiclopedia</h5>
    </div>
  </div>
<div style="font-family: arial;" class="container mt-3 pt-2">
    <center>
    <div class="col-md-6">
        <div class="input-group input-group-lg mb-3">
            <input type="text" class="form-control input-lg" placeholder="Search Game Mobile" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
            </div>
          </div>
    </div>
</center>
<br><br>
    <div class="row">
        <div class="col-md-12">
            <main role="main">
                <div style="font-family: arial;" class="container">
                  <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">PUBG MOBILE</h5>
                              <p class="card-text">player, team, turnament, maps, weapon</p>
                              <a href="#" class="btn btn-primary">Go Klik Here</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">MOBILE LEGENDS</h5>
                              <p class="card-text">player, team, turnament, maps, weapon</p>
                              <a href="#" class="btn btn-primary">Go Klik Here</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">FREE FIRE</h5>
                              <p class="card-text">player, team, turnament, maps, weapon</p>
                              <a href="#" class="btn btn-primary">Go Klik Here</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <br>
                   <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">CLASH ROYALE</h5>
                              <p class="card-text">player, team, turnament, maps, weapon</p>
                              <a href="#" class="btn btn-primary">Go Klik Here</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">ARENA OF VALOR</h5>
                              <p class="card-text">player, team, turnament, maps, weapon</p>
                              <a href="#" class="btn btn-primary">Go Klik Here</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-family: arial; font-weight: bold;" class="card-title">COD MOBILE</h5>
                              <p class="card-text">player, team, turnament, maps, weapon</p>
                              <a href="#" class="btn btn-primary">Go Klik Here</a>
                            </div>
                          </div>
                    </div>
                  </div>
                  <hr>
                </div>
              </main>

@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
