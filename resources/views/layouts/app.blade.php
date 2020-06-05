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

/* Style the form */

  
/* Style the input fields */
input {
padding: 10px;
width: 100%;
font-size: 17px;
border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbbbbb;
border: none;
border-radius: 50%;
display: inline-block;
opacity: 0.5;
}

/* Mark the active step: */
.step.active {
opacity: 1;
}

/* Mark the steps that are finished and valid: */>
.step.finish {
background-color: #881720;
}




/* Seat style */

.messagePanel { border: solid 1px black; width: 320px; height: 330px; }

.seat {   
    width: 20px;
    height: 20px;
    margin: 5px;
    border: solid 1px black;
    float: left;
    border-radius: 7px;
}
.clearfix { clear: both;}
.available {
    background-color: rgb(245, 243, 243);
}
.hovering{
	background-color: gray;
}
.selected{
    background-color:  #881720;
}

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
            @if (Auth::check())
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin') }}">Zona admin</a>
            </li>
            @else
            <li class="nav-item">
            <a class="nav-link" href="{{ url('/bilhetes') }}">Compra de Bilhetes</a>
            </li>
            @endif

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
