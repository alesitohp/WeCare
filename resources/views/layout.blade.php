<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet"/>
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
        
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 3.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .btn-primary {
    background-color: #8064A2 !important;
        }
        
        .imagen{
            position: absolute; 
            right: -60px; 
            bottom: 0px;
            top: -50px;
        }
        
                .btn-group button {
        background-color: #04AA6D; /* Green background */
        border: 1px solid green; /* Green border */
        color: white; /* White text */
        padding: 10px 24px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        float: left; /* Float the buttons side by side */
        }

        .btn-group button:not(:last-child) {
        border-right: none; /* Prevent double borders */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
        content: "";
        clear: both;
        display: table;
        }

        /* Add a background color on hover */
        .btn-group button:hover {
        background-color: #3e8e41;
        }
        .pepe{
            margin-top: 20px;
        }
        .mains{
            margin-top: 100px;
            display: block;
        }
        .blink {
            animation: blinker 2s linear infinite;
}
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDivmain {
  display: none;
  
}

#myDivlogin {
  display: none;
  
}
#myDivsettings {
  display: none;
}

#myDivregistration {
  display: none;
  text-align: center;
}



@keyframes blinker {
  50% {
    opacity: 0;
  }
}
    </style>
</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a href="{{ route('dashboard') }}">
            <img src="{{asset('assets/images/lapua.png')}}"class="imagen" width="160" height="160" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <!-- @guest
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
                @endguest -->
            </ul>
  
        </div>
    </div>
</nav>
<div style="display:none;" id="myDivmain" class="animate-bottom">
<main class="login-form mains">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-body">
                  <div class="d-flex justify-content align-items-center">

                    
                <div style="margin-right: 90px;margin-left: 180px;">
                <p style="margin-left: 20px;">Baños de chicos</p>
                <svg width="200px" height="300px">
                <circle cx="75" cy="45" r="30"
                        fill="red" stroke="black" stroke-width="2" class="blink" />
                <circle cx="75" cy="145" r="30"
                        fill="yellow" stroke="black" stroke-width="2" />
                <circle cx="75" cy="245" r="30"
                        fill="#40CC40" stroke="black" stroke-width="2" />
                </svg>
                <div style="margin-left: 15px;margin-top: 15px;">
                <form action="">
                @csrf
                <button  style="display: inline-block;" id="añadir" name="añadir">Añadir</button>
                <button style="display: inline-block" id="añadir" name="añadir">Borrar</button>
                </form>
                
                

                </div>


                </div>

                <div style="margin-right: 180px;margin-left: 90px; ">
                <p style="margin-left: 20px;">Baños de chicas</p>
                <svg width="200px" height="300px">
                <circle cx="75" cy="45" r="30"
                        fill="red" stroke="black" stroke-width="2"  />
                <circle cx="75" cy="145" r="30"
                        fill="yellow" stroke="black" stroke-width="2" />
                <circle cx="75" cy="245" r="30"
                        fill="#40CC40" stroke="black" stroke-width="2"class="blink" />
                </svg>
                <div style="margin-left: 15px;margin-top: 15px;">
                <button style="display: inline-block;"  id="añadir" name="añadir">Añadir</button>
                <button style="display: inline-block" id="borrar" name="borrar">Borrar</button>

                </div>

                </div>
                

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
</div>
  
@yield('content')
     
</body>
</html>
<script>
    var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 250);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDivmain").style.display = "block";
  document.getElementById("myDivlogin").style.display = "block";
}



    
   if (localStorage.hey === 'Awa') {
                localStorage.setItem("lastname", "linear-gradient(50deg, #5E5E5E 50%, #7F7F7F 50%)");
                document.body.style.background=localStorage.getItem("lastname");

                }
                if (localStorage.hey === 'no') {
                localStorage.setItem("lastname", "linear-gradient((50deg, #FF8112 50%, #00B3D6 50%)");
                document.body.style.background=localStorage.getItem("lastname");
                }
                if (localStorage.hey === 'puede') {
                localStorage.setItem("lastname", "linear-gradient(50deg, #8c004b 50%, #ff0000 50%)");
                document.body.style.background=localStorage.getItem("lastname");
                }

                function cambiarcoloroscuro(){

                localStorage.setItem('hey', 'Awa');
                location.reload();

                }
                function cambiarcolornormal(){

                localStorage.setItem('hey', 'no');
                location.reload();


                }
                function cambiarcolorabstracto(){

                localStorage.setItem('hey', 'puede');
                location.reload();


                }
                
        // Store

    
   
</script>