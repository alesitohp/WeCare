@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(@Auth::user()->hasRole('usuario'))
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            height: 100%;
            background: linear-gradient(50deg, #FF8112 50%, #00B3D6 50%);
        }
        @import url('https://fonts.googleapis.com/css?family=Oswald:500');


nav{
  width: 100%;
  position: fixed;
  top:50px;
  text-align:center;
}
nav a{
  font-family: 'Oswald', sans-serif;
  font-weight:500;
  text-transform:uppercase;
  text-decoration:none;
  color:#16151b;
  margin:0 15px;
  font-size:16px;
  letter-spacing:1px;
  position:relative;
  display:inline-block;
}
nav a:before{
  content:'';
  position: absolute;
  width: 100%;
  height: 3px;
  background:#16151b;
  top:47%;
  animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
}
nav a:hover:before{
  animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;

}
@keyframes in{
  0%{
    width: 0;
    left:0;
    right:auto;
  }
  100%{
    left:0;
    right:auto;
    width: 100%;
  }
}
@keyframes out{
  0%{
    width:100%;
    left: auto;
    right: 0;
  }
  100%{
    width: 0;
    left: auto;
    right: 0;
  }
}
@keyframes show{
  0%{
    opacity:0;
    transform:translateY(-10px);
  }
  100%{
    opacity:1;
    transform:translateY(0);
  }
}


        
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    
<nav>
  <a id="inicio" href="{{ route('dashboard') }}">Inicio</a>
  <a id="ajustes" href="{{ route('settings') }}">Ajustes</a>
  <a id="cerrar" href="{{ route('logout') }}">Cerrar sesión</a>
</nav>

  <!-- <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img class="logo horizontal-logo" src="horizontal-logo.svg" alt="forecastr logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('register') }}">Registrar usuarios</a>        
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('login') }}">Ajustes</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        ...
      </ul>
    </div>
  </div> -->
</navbar>
   
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Salir</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div> -->
</nav>

  
@yield('content')
     
</body>
</html>

@elseif(@Auth::user()->hasRole('admin'))
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            height: 100%;
            background: linear-gradient(50deg, #FF8112 50%, #00B3D6 50%);
        }
        @import url('https://fonts.googleapis.com/css?family=Oswald:500');


nav{
  width: 100%;
  position: fixed;
  top:50px;
  text-align:center;
}
nav a{
  font-family: 'Oswald', sans-serif;
  font-weight:500;
  text-transform:uppercase;
  text-decoration:none;
  color:#16151b;
  margin:0 15px;
  font-size:16px;
  letter-spacing:1px;
  position:relative;
  display:inline-block;
}
nav a:before{
  content:'';
  position: absolute;
  width: 100%;
  height: 3px;
  background:#16151b;
  top:47%;
  animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
}
nav a:hover:before{
  animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;

}
@keyframes in{
  0%{
    width: 0;
    left:0;
    right:auto;
  }
  100%{
    left:0;
    right:auto;
    width: 100%;
  }
}
@keyframes out{
  0%{
    width:100%;
    left: auto;
    right: 0;
  }
  100%{
    width: 0;
    left: auto;
    right: 0;
  }
}
@keyframes show{
  0%{
    opacity:0;
    transform:translateY(-10px);
  }
  100%{
    opacity:1;
    transform:translateY(0);
  }
}


        
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    
<nav>
  <a id="inicio" href="{{ route('dashboard') }}">Inicio</a>
  <a id="ajustes" href="{{ route('settings') }}">Ajustes</a>
  <a id="registrar" href="{{ route('register') }}">Invitar</a>
  <a id="cerrar" href="{{ route('logout') }}">Cerrar sesión</a>
</nav>

  <!-- <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img class="logo horizontal-logo" src="horizontal-logo.svg" alt="forecastr logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('register') }}">Registrar usuarios</a>        
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('login') }}">Ajustes</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        ...
      </ul>
    </div>
  </div> -->
</navbar>
   
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Salir</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div> -->
</nav>
<script>
  if (localStorage.bianco === 'tomillo') {
/*     localStorage.setItem("idioma", "Language");         
    document.getElementById("cambiaridioma").innerHTML = localStorage.getItem("idioma"); */

    document.getElementById("inicio").innerHTML = "Homepage";

            
    document.getElementById("ajustes").innerHTML = "Settings";
    
      
    document.getElementById("registrar").innerHTML = "Invite";
        
    document.getElementById("cerrar").innerHTML = "Sign out";
    }
    if (localStorage.bianco === 'JUAN') {
/*     localStorage.setItem("idioma", "Language");         
    document.getElementById("cambiaridioma").innerHTML = localStorage.getItem("idioma"); */

    document.getElementById("inicio").innerHTML = "Startseite";

            
    document.getElementById("ajustes").innerHTML = "Einstellung";
    
      
    document.getElementById("registrar").innerHTML = "Einladen";
        
    document.getElementById("cerrar").innerHTML = "Ausloggen";
    }
</script>

  
@yield('content')
     
</body>
</html>
@endif

</body>
</html>