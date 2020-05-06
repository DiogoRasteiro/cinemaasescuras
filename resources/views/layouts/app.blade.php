<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Cinema às Escuras')</title>
<!--    <link rel="stylesheet" href="css/bootstrap.css" > -->
    <link rel="stylesheet" href="{{ asset('css/Hover.css') }}" >
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

<style>
.map-container-5{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-5 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark static-top" style="background-color: #881720;">
    <div class="container">

    <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/film-roll.png" width="100" height="100" alt="">
          </a>
         <h1 class="text-white"> CINEMA ÀS ESCURAS</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">   
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn dropdown-toggle" href="" data-toggle="dropdown">Filmes</a>
              <div class="dropdown">

                <div class="dropdown-menu" style="background-color: #881720;" >
                  <a class="dropdown-item" href="{{ url('/filmlist') }}" style="color: rgb(197, 165, 165);">Cartaz</a>
                  <a class="dropdown-item" href="{{ url('/brevemente') }}" style="color: rgb(197, 165, 165);">Brevemente</a>

                </div>
              </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/bilhetes') }}">Compra de Bilhetes</a>
            </li>

            @if (Auth::check())
          <li class="nav-item">
           <p class="nav-link">  Hi @php echo (Auth::user()->name) @endphp </p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
          </li>
            @else
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
          </li>
            @endif
          
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
<script src="{{ URL::asset('js/jquery-3.3.1.slim.min.js')}}" ></script>
<script src="{{ URL::asset('js/popper.min.js')}}" ></script>
<script src="{{ URL::asset('js/bootstrap.min.js')}}" ></script>
</body>
</html>
