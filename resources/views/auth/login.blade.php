@extends('layout')

@section('content')
<style>
    .imagen{
            position: absolute; 
            left: 35px; 
            bottom: 0px;
            top: 35px;

        }
        .mains{
            margin-top: 100px;
            display: none;
        }
</style>
<div style="display:none;" id="myDivlogin" class="animate-bottom">
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  <br>
                                  <label class="container">
                                  <input type="checkbox" onclick="myFunction()"> Mostrar contraseña
                                  </label>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                                  <script>
                                    function myFunction(){
                                        var x = document.getElementById("password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                    }
                                </script>

                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label class="container">
                                          <input type="checkbox" name="remember"> Recuérdame
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Iniciar Sesión
                              </button>
                          </div>
                          
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
</div>

@endsection

