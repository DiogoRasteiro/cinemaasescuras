﻿@extends('layouts.app')

@section('title') Sobre nós @endsection

@section('content')

<!-- História -->
<h3  style="text-align: center; padding-top: 50px;">
    História
    </h3>
    <div class="text-muted" style="padding-left:220px; padding-right:220px; padding-top:40px; text-align:center;">
        O “Cinema às Escuras”, foi fundado em 2019, por 3 jovens empreendedores que adoravam o mundo do cinema. 
        Após 2 anos juntos e a pensarem nas perspetivas de futuro, decidiram abrir salas de cinema distribuídas 
        pela Grande Lisboa. 
    </div>	
    <br>
    <br>
    <hr class="my-2">


<!-- Onde Estamos -->
<h3  style="text-align: center; padding-top: 50px;"> Onde Estamos </h3>
    <div class="text-muted" style="padding-left:220px; padding-right:220px; padding-top:40px; text-align:center;">
        Atualmente, a empresa encontra-se presente em: Sobral de Monte Agraço, Alcochete e Massamá.
    </div>
    <br><br>
<div class="row">
    <div class="col-md-4 mb-4" style="padding-left: 5%;">
      <div class="card card-cascade narrower" >
        <div class="view view-cascade gradient-card-header blue-gradient">
          <h5 class="text-muted" style="text-align: center; padding-top: 10px;"> Sobral de Monte Agraço</h5>
        </div>
        <div class="card-body card-body-cascade text-center">
          <div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height: 300px">
            <iframe src="https://maps.google.com/maps?q=sobral%20monte&t=&z=15&ie=UTF8&iwloc=&output=embed"
              frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4" >
      <div class="card card-cascade narrower">
        <div class="view view-cascade gradient-card-header peach-gradient">
        <h5 class="text-muted" style="text-align: center; padding-top: 10px;"> Alcochete</h5>
        </div>
        <div class="card-body card-body-cascade text-center">
          <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
            <iframe src="https://maps.google.com/maps?q=av.%20restaura%C3%A7%C3%A3o&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>


  <div class="col-md-4 mb-4" style="padding-right: 5%;">
    <div class="card card-cascade narrower">
      <div class="view view-cascade gradient-card-header peach-gradient">
        <h5 class="text-muted" style="text-align: center; padding-top: 10px;"> Massamá</h5>
      </div>
      <div class="card-body card-body-cascade text-center">
        <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
          <iframe src="https://maps.google.com/maps?q=Shopping%20Center%20Massam%C3%A1%2C%20av.%2025%20de%20abril&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">

<!-- O nosso espaço e serviços -->
<h3  style="text-align: center; padding-top: 50px;"> O nosso espaço e serviços</h3>
    <div class="text-muted" style="padding-left:220px; padding-right:220px; padding-top:40px; text-align:center;">
      As instalações dos nossos cinemas contam com 7 salas de cinema comuns:
      <br>
      <br>
      4 salas com 200 lugares de capacidade;
      <br>
        3 salas com 400 lugares de capacidade;

    </div>
    <br><br>
<div class="row">
    <div class="col-md-4 mb-4" style="padding-left: 5%;">
      <div class="card card-cascade narrower" >
        <div class="view view-cascade gradient-card-header blue-gradient">
          <h5 class="text-muted" style="text-align: center; padding-top: 10px;"> IMAX</h5>
        </div>
        <div class="card-body card-body-cascade text-center">
          <img src="img/imax.jpg" style="width:100%; height:220px">
          <br>
          <br>
          <p class="text-muted" style="text-align: center; padding-top: 10px;">
            Uma sala IMAX com 500 lugares.
            Em IMAX, desde o filme à tecnologia e design da sala, 
            tudo foi desenvolvido e customizado para o fazer acreditar que faz parte da ação.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4" >
      <div class="card card-cascade narrower">
        <div class="view view-cascade gradient-card-header peach-gradient">
        <h5 class="text-muted" style="text-align: center; padding-top: 10px;"> Atividades</h5>
        </div>
        <div class="card-body card-body-cascade text-center">
          <img src="img/Arcade.jpg" style="width:100%; height:220px">
          <br>
          <br>
          <p class="text-muted" style="text-align: center; padding-top: 10px;">
            As nossas intalações dispõem de uma sala de convívio, onde os clientes podem usufruir 
           de máquinas de jogos.O espaço disponibiliza também um bar com alguns refrescos e serviço de pipocas.
           
          </p>
        </div>
      </div>
    </div>


  <div class="col-md-4 mb-4" style="padding-right: 5%;">
    <div class="card card-cascade narrower">
      <div class="view view-cascade gradient-card-header peach-gradient">
        <h5 class="text-muted" style="text-align: center; padding-top: 10px;"> Festas de Aniversário</h5>
      </div>
      <div class="card-body card-body-cascade text-center">
        <img src="img/Aniversario.png" style="width:100%; height:220px">
        <br>
        <br>
        <p class="text-muted" style="text-align: center; padding-top: 10px;">
          Caso um dos nossos nossos clientes queira celebrar o seu aniversário connosco, temos a festa perfeita, cheia de filmes e diversão!
          Para mais informações contacte um dos nossos espaços.
        </p>
      </div>
    </div>
  </div>
</div>
<hr class="my-2">


<!-- Contacta-nos -->
<h3 style="text-align: center; padding-top: 50px;"> Contacte-nos</h3>
<div class="text-muted" style="padding-left:220px; padding-right:220px; padding-top:40px; text-align:center;">
Caso tenha alguma dúvida contacte-nos através deste formulário ou através do número de telefone de um dos nossos espaços.
</div>	
<div class="container text-muted">
    <div class=" mx-auto">
      <div class="card card-signin my-5" style="border-radius: 1%; padding: 2%; background-color: #fbfbfb">
        <div class="card-body" style=" border-style: dashed; border-color: #881720;">
          <form>
            
            <label for="inputNome">Nome</label>
            <div class="input-group text-muted">
              <input type="text" class="form-control form-control-sm my-1" placeholder="Primeiro" required >
              <input type="text" class="form-control form-control-sm my-1" placeholder="Último" required >
            </div>

            <div class="form-label-group text-muted" >
                <label for="inputEmail">Endereço de email</label>
              <input type="email" id="inputEmail" class="form-control form-control-sm my-1" placeholder="Email" required >
            </div>

            <div class="form-label-group text-muted">
              <label for="inputTelemovel">Contacto</label>
              <input type="tel" id="inputTelemovel" class="form-control form-control-sm my-1" placeholder="Telemóvel">
            </div>

            <div class="form-label-group text-muted">
              <label for="inputPassword">Mensagem</label>
              <textarea class="form-control form-control-sm my-1" id="inputMessage" rows="3" placeholder="Mensagem" required ></textarea>
            </div>


            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" required id="customCheck1">
              <label class="custom-control-label text-muted small" for="customCheck1">Aceito e concordo que O Cinema Às Escuras guarde os meus dados</label>
            </div>
            <button class="btn btn-lg btn-primary offset-10" type="submit" style="background-color: rgb(168, 162, 162); border-color: rgb(168, 162, 162); ">Enviar</button>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- Team -->
<hr class="my-2">
  <h3  style="text-align: center; padding-top: 50px;">The Team</h3>

<div class="container text-center text-md-center my-5">
    <div class="row">
      <div class="col-sm-3 mx-auto">
  <img src="img/diogo_rasteiro.png" width="170" height="170" alt="">
  <figcaption class="text-muted my-2"> Diogo Rasteiro </figcaption>
      </div>
      <hr class="clearfix w-50 d-md-none">
      <div class="col-sm-3 mx-auto">
  <img src="img/joana_sampaio.png" width="170" height="170" alt="">
  <figcaption class="text-muted my-2"> Joana Sampaio </figcaption>
      </div>
      <hr class="clearfix w-50 d-md-none">
      <div class="col-sm-3 mx-auto">
  <img src="img/mariana_martins.png" width="170" height="170" alt="">
  <figcaption class="text-muted my-2"> Mariana Martins </figcaption>
      </div>

    </div>
  </div>

  <hr class="my-4">

		
@endsection
