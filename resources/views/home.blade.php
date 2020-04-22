@extends('layouts.app')

@section('content')
<!-- Carousel Slideshow -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/festadocinema-slideshow.jpg" alt="First slide" height="550">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Pikachu-slideshow.png" alt="Second slide" height="550">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/rocketman-slideshow.jpg" alt="Third slide" height="550">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/avengers-slideshow.jpg" alt="Fourth slide" height="550">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Film Gallery - Em cartaz -->
<br>
<br>
<h1 id="hcartaz" class="text-center"> Em Cartaz</h1>
<br> <br>
<div class="row">
  <div class="col-md-2 mx-auto">
    <div class=" thumbnail">
      <div class="hovereffect">
      <img class="img-responsive" src="img/avengers.jpg" style="width:230px; height: 350px;">
      <div class="overlay">
         <a class="info" href="#" style="color: white;">Saber mais</a>
      </div>
      <div class="caption">
        <br>
        <h5 style="color: black; text-decoration:underline; text-align:center"> Vingadores: Endgame </h5>
      </div>
    </div>
  </div>
  </div>
 
  <div class="col-md-2 mx-auto">
    <div class="thumbnail">
      <div class="hovereffect">
        <img class="img-responsive" src="img/setepecados.jpg" style="width:230px; height: 350px;">
        <div class="overlay">
          <a class="info" href="#" style="color: white;">Saber mais</a>
       </div>
        <div class="caption">
          <br>
          <h5 style="color: black; text-decoration:underline; text-align:center"> Sete Pecados Rurais </h5>
        </div>
    </div>
  </div>
</div>

<div class="col-md-2 mx-auto">
  <div class="thumbnail">
    <div class="hovereffect">
      <img class="img-responsive" src="img/monstros.jpg" style="width:230px; height: 350px;">
      <div class="overlay">
        <a class="info" href="#" style="color: white;">Saber mais</a>
     </div>
      <div class="caption">
        <br>
        <h5 style="color: black; text-decoration:underline; text-align:center"> Monstros e Companhia </h5>
      </div>
  </div>
</div>
</div>

  <div class="col-md-2 mx-auto">
    <div class="thumbnail">
      <div class="hovereffect">
        <img class="img-responsive" src="img/imitation.jpg" style="width:230px; height: 350px;">
        <div class="overlay">
          <a class="info" href="#" style="color: white;">Saber mais</a>
       </div>
        <div class="caption">
          <br>
          <h5 style="color: black; text-decoration:underline; text-align:center"> The Imitation Game </h5>
        </div>
    </div>
  </div>
</div>

<div class="col-md-2 mx-auto">
  <div class="thumbnail">
    <div class="hovereffect">
      <img class="img-responsive" src="img/inception.jpg" style="width:230px; height: 350px;">
      <div class="overlay">
        <a class="info" href="#" style="color: white;">Saber mais</a>
     </div>
      <div class="caption">
        <br>
        <h5 style="color: black; text-decoration:underline; text-align:center"> Inception </h5>
      </div>
  </div>
</div>
</div>

</div>

  <br><br>
  <div class="container text-center text-md-center">
    <div class="row">
      <div class="col-sm-12">
  <button class="btn btn-lg btn-primary my-1 mx-auto" href="Em Cartaz.html" type="submit" style="background-color: #881720; border-color: #881720; ">Ver Mais</button>
      </div>
    </div>
  </div>
  <hr class="my-5">


<!-- Film Gallery - Brevemente -->

<h1 id="hcartaz" class="text-center"> Brevemente</h1>
<br> <br>
<div class="row">
  <div class="col-md-2 mx-auto">
    <div class=" thumbnail">
      <div class="hovereffect">
      <img class="img-responsive" src="img/wick3.jpg" style="width:230px; height: 350px;">
      <div class="overlay">
         <a class="info" href="#" style="color: white;">Saber mais</a>
      </div>
      <div class="caption">
        <br>
        <h5 style="color: black; text-decoration:underline; text-align:center"> John Wick 3 - Implacável </h5>
      </div>
    </div>
  </div>
  </div>
 
  <div class="col-md-2 mx-auto">
    <div class="thumbnail">
      <div class="hovereffect">
        <img class="img-responsive" src="img/bird.jpg" style="width:230px; height: 350px;">
        <div class="overlay">
          <a class="info" href="#" style="color: white;">Saber mais</a>
       </div>
        <div class="caption">
          <br>
          <h5 style="color: black; text-decoration:underline; text-align:center"> Operação Humming Bird </h5>
        </div>
    </div>
  </div>
</div>

<div class="col-md-2 mx-auto">
  <div class="thumbnail">
    <div class="hovereffect">
      <img class="img-responsive" src="img/intruso.jpg" style="width:230px; height: 350px;">
      <div class="overlay">
        <a class="info" href="#" style="color: white;">Saber mais</a>
     </div>
      <div class="caption">
        <br>
        <h5 style="color: black; text-decoration:underline; text-align:center"> O Intruso </h5>
      </div>
  </div>
</div>
</div>

<div class="col-md-2 mx-auto">
  <div class="thumbnail">
    <div class="hovereffect">
      <img class="img-responsive" src="img/professor.jpg" style="width:230px; height: 350px;">
      <div class="overlay">
        <a class="info" href="#" style="color: white;">Saber mais</a>
     </div>
      <div class="caption">
        <br>
        <h5 style="color: black; text-decoration:underline; text-align:center"> O Professor e o Louco </h5>
      </div>
  </div>
</div>
</div>

  <div class="col-md-2 mx-auto">
    <div class="thumbnail">
      <div class="hovereffect">
        <img class="img-responsive" src="img/pikachu.jpg" style="width:230px; height: 350px;">
        <div class="overlay">
          <a class="info" href="#" style="color: white;">Saber mais</a>
       </div>
        <div class="caption">
          <br>
          <h5 style="color: black; text-decoration:underline; text-align:center"> Pokémon Detetive Pikachu </h5>
        </div>
    </div>
  </div>
</div>
</div>

  <br><br>
  <div class="container text-center text-md-center">
    <div class="row">
      <div class="col-sm-12">
  <button class="btn btn-lg btn-primary my-1 mx-auto" href="Brevemente.html" type="submit" style="background-color: #881720; border-color: #881720; ">Ver Mais</button>
      </div>
    </div>
  </div>
  <hr class="my-5">

@endsection