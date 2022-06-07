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
        .theme{
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

                    
                <div style="margin-right: 35px;margin-left: 105px;">
                <p style="margin-left: 20px;">Baños de chicos 1</p>
                <svg width="200px" height="00px">
                <p></p>
                <img src="{{asset('assets/images/rojo1.png')}}"class="blink" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/naranja1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/verde1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                
                </svg>
                <div style="margin-left: 15px;margin-top: 15px;">
                <form action="">
                @csrf
                <button  style="display: inline-block;" id="entrada" name="entrada">ENTRADA</button>
                <button style="display: inline-block" id="salida" name="salida">SALIDA</button>
                </form>
                
                

                </div>


                </div>

                <div style="margin-right: 35px;margin-left: 35px;">
                <p style="margin-left: 20px;">Baños de chicos 2</p>
                <svg width="200px" height="00px">
                <p></p>
                <img src="{{asset('assets/images/rojo1.png')}}"class="blink" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/naranja1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/verde1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                
                </svg>
                <div style="margin-left: 15px;margin-top: 15px;">
                <form action="">
                @csrf
                <button  style="display: inline-block;" id="entrada" name="entrada">ENTRADA</button>
                <button style="display: inline-block" id="salida" name="salida">SALIDA</button>
                </form>
                
                

                </div>


                </div>

                <div style="margin-right: 35px;margin-left: 35px;">
                <p style="margin-left: 20px;">Baños de chicas 1</p>
                <svg width="200px" height="00px">
                <p></p>
                <img src="{{asset('assets/images/rojo1.png')}}"class="blink" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/naranja1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/verde1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                
                </svg>
                <div style="margin-left: 15px;margin-top: 15px;">
                <form action="">
                @csrf
                <button  style="display: inline-block;" id="entrada" name="entrada">ENTRADA</button>
                <button style="display: inline-block" id="salida" name="salida">SALIDA</button>
                </form>
                
                

                </div>


                </div>

                <div style="margin-right: 35px;margin-left: 35px;">
                <p style="margin-left: 20px;">Baños de chicas 2</p>
                <svg width="200px" height="00px">
                <p></p>
                <img src="{{asset('assets/images/rojo1.png')}}"class="blink" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/naranja1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                <p></p>
                <img src="{{asset('assets/images/verde1.png')}}"class="" width="160" height="160" alt="">
                <p></p>
                
                </svg>
                <div style="margin-left: 15px;margin-top: 15px;">
                <form action="">
                @csrf
                <button  style="display: inline-block;" id="entrada" name="entrada">ENTRADA</button>
                <button style="display: inline-block" id="salida" name="salida">SALIDA</button>
                </form>
                
                

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



    
   if (localStorage.a === '1') {
                localStorage.setItem("lastname", "linear-gradient(50deg, #5E5E5E 50%, #7F7F7F 50%)");
                document.body.style.background=localStorage.getItem("lastname");

                }
                if (localStorage.a === '2') {
                localStorage.setItem("lastname", "linear-gradient((50deg, #FF8112 50%, #00B3D6 50%)");
                document.body.style.background=localStorage.getItem("lastname");
                }
                if (localStorage.a === '3') {
                localStorage.setItem("lastname", "linear-gradient(50deg, #8c004b 50%, #ff0000 50%)");
                document.body.style.background=localStorage.getItem("lastname");
                }

                function cambiarcoloroscuro(){

                localStorage.setItem('a', '1');
                location.reload();

                }
                function cambiarcolornormal(){

                localStorage.setItem('a', '2');
                location.reload();


                }
                function cambiarcolorabstracto(){

                localStorage.setItem('a', '3');
                location.reload();


                }
                
        // Store

    
   
</script>