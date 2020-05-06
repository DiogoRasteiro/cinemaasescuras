@extends('layouts.app')

@section('title') Login @endsection

@section('content')
<!-- Login Form -->
        <div class="container" >
                <div class="row">
                  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5" style="border-radius: 10%; padding: 4%; background-color: #fbfbfb">
                      <div class="card-body" style=" border-style: dashed; border-color: #881720;">
                        <h5 class="card-title text-center text-muted">Login In</h5>
                        <form class="form-signin">
                          <div class="form-label-group text-muted" >
                              <label for="inputEmail">Endereço de email</label>
                            <input type="email" id="inputEmail" class="form-control my-1" placeholder="Endereço de email" required autofocus>
                          </div>
            
                          <div class="form-label-group text-muted">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" class="form-control my-1" placeholder="Password" required>
                          </div>
            
                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label text-muted small" for="customCheck1">Lembrar password</label>
                          </div>
                          <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: rgb(168, 162, 162); border-color: rgb(168, 162, 162); ">Login in</button>
                          <hr class="my-4">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

@endsection              