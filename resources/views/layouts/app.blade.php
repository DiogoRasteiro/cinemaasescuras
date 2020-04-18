<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<!--    <link rel="stylesheet" href="css/bootstrap.css" > -->
    <link rel="stylesheet" href="{{ asset('css/Hover.css') }}" >
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #881720;">
    <div class="container">

      <a class="navbar-brand" href="Home.html">
            <img src="img/film-roll.png" width="100" height="100" alt="">
          </a>
         <h1 class="text-white"> CINEMA ÀS ESCURAS</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">   
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <li class="nav-item">
              <a class="nav-link" href="Sobre.html">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn dropdown-toggle" href="" data-toggle="dropdown">Filmes</a>
              <div class="dropdown">

                <div class="dropdown-menu" style="background-color: #881720;" >
                  <a class="dropdown-item" href="Em cartaz.html" style="color: rgb(197, 165, 165);">Cartaz</a>
                  <a class="dropdown-item" href="Brevemente.html" style="color: rgb(197, 165, 165);">Brevemente</a>

                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.html">Compra de Bilhetes</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<!-- Footer -->
<footer class="page-footer font-small fixed-bottom pt-1 " style="background-color: #881720; height: 50px;">
  <div class="container text-center text-md-center">
    <div class="row">
      <div class="col-sm-3 mx-auto">
        <h6 class="font-weight-light mt-8 mb-1 small text-white">Privacidade</h6>
      </div>
      <hr class="clearfix w-50 d-md-none">
      <div class="col-sm-3 mx-auto">
        <h6 class="font-weight-light mt-8 mb-1 small text-white">Termos e Condições</h6>
      </div>
      <hr class="clearfix w-50 d-md-none">
      <div class="col-sm-3 mx-auto">
        <h6 class="font-weight-light mt-8 mb-1 small text-white">Política de Cookies</h6>
      </div>
    </div>
  </div>

<!-- Copyright -->
  <div class="footer-copyright text-center pt-0.5 small text-white"  >© 2020 Copyright: Cinema Às Escuras: Todos os direitos reservados
  </div>
</footer>

@yield('content')

<br><br><br>
<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>
