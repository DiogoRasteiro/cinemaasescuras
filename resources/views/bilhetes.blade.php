@extends('layouts.app')

@section('content')
<!-- Comprar bilhete -->
<h3 style="text-align: center; padding-top: 50px;"> O meu Bilhete </h3>
<div class="container text-muted">
    <div class=" mx-auto" style="width:450px;">
      <div class="card card-signin my-3" style="border-radius: 1%; padding: 2%; background-color: #fbfbfb;">
        <div class="card-body" style=" border-style: dashed; border-color: #881720;">
          <form id="regForm" action="">  
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
              <h5 style="color: #881720;">Cinema</h5>
              <select class="mdb-select md-form"> 
                <option value="" disabled selected>Escolha um dos locais</option>
                <option value="1">Massamá</option>
                <option value="2">Seixal</option>
                <option value="3">Sobral de Monte Agraço</option>
              </select>
              <br>
              <br>
              <h5 style="color: #881720;">Filme</h5>
              <select class="mdb-select md-form"> 
                <option value="" disabled selected>Escolha um filme</option>
                <option value="1">The Imitation Game</option>
                <option value="2">Avengers</option>
                <option value="3">7 Pecados Rurais</option>
              </select>
              <br>
              <br>
              <h5 style="color: #881720;">Sessão</h5>
              <select class="mdb-select md-form"> 
                <option value="" disabled selected>Escolha uma sessão</option>
                <option value="1">11:00h</option>
                <option value="2">15h30</option>
                <option value="3">18h30</option>
                <option value="3">21h30</option>
              </select>
              <br>
              <br>
            </div>
            
            <div class="tab">Onde pretende receber os seus bilhetes:
              <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
              <p><input placeholder="Número de Telemóvel..." oninput="this.className = ''"></p>
            </div>
            
            <div class="tab">Escolha o seu lugar:
              <button id="btnSeating"> Click to pick your seat</button>
              <div id="messagePanel" class="messagePanel"></div>
            </div>
            
            <div style="overflow:auto;">
              <div style="float:right;">
                <button class="btn btn-lg btn-primary" type="button" id="prevBtn" style="background-color: rgb(168, 162, 162); border-color: rgb(168, 162, 162); " onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-lg btn-primary" type="button" style="background-color: rgb(168, 162, 162); border-color: rgb(168, 162, 162); " id="nextBtn" onclick="nextPrev(1)">Next</button>
              </div>
            </div>
            
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
            
            </form>
      </div>
    </div>
  </div>
</div>


<script src="{{ URL::asset('js/Compra_Bilhetes.js')}}" ></script>
</body>
</html>

@endsection