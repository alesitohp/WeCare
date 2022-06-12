<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
    @import url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2);


    body {
      margin: 0;
      font-size: .9rem;
      font-weight: 400;
      line-height: 1.6;
      color: #212529;
      text-align: left;
      height: 100%;
      background: linear-gradient(50deg, #FF8112 50%, #00B3D6 50%);
      background-repeat: no-repeat;
    }

    .navbar-brand,
    .nav-link,
    .my-form,
    .login-form {
      font-family: Poppins;
    }

    .my-form {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }

    .my-form .row {
      margin-left: 0;
      margin-right: 0;
    }

    .login-form {
      padding-top: 3.5rem;
      padding-bottom: 1.5rem;
    }

    .login-form .row {
      margin-left: 0;
      margin-right: 0;
    }

    .btn-primary {
      background-color: #8064A2 !important;
    }

    .imagen {
      position: absolute;
      right: 2em;
      bottom: 0em;
      top: 0em;
    }

    .busqueda {
      float: right;
      width: 47em;
      margin-top: -32.5em;
    }

    .btn-group button {
      background-color: #04AA6D;
      /* Green background */
      border: 1em solid green;
      /* Green border */
      color: white;
      /* White text */
      padding: 1em 2em;
      /* Some padding */
      cursor: pointer;
      /* Pointer/hand icon */
      float: left;
      /* Float the buttons side by side */
    }

    .btn-group button:not(:last-child) {
      border-right: none;
      /* Prevent double borders */
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

    .theme {
      margin-top: 2em;
    }

    .mains {
      margin-top: 2em;
      margin-left: -25em;
      display: block;
      text-align: center;
    }

    .blink {
      animation: blinker 2s linear infinite;
    }

    .animate-bottom {
      position: relative;
      -webkit-animation-name: animatebottom;
      -webkit-animation-duration: 1s;
      animation-name: animatebottom;
      animation-duration: 1s;


    }

    @-webkit-keyframes animatebottom {
      from {
        bottom: -100px;
        opacity: 0
      }

      to {
        bottom: 0px;
        opacity: 1
      }
    }

    @keyframes animatebottom {
      from {
        bottom: -100px;
        opacity: 0
      }

      to {
        bottom: 0;
        opacity: 1
      }
    }

    .row {
      margin-left: auto;
      margin-right: auto;
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
        <img src="{{asset('assets/images/lapua.png')}}" class="imagen" width="160" height="160" alt="">
      </a>
      </img>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>
  <div style="display:none;" id="myDivmain" class="animate-bottom">
    <main class="login-form mains">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content align-items-center">


                  <div style="margin-right: 2em;margin-left: 2em;">
                    <p>CHICOS 1</p>
                    <svg id="sema1" width="1em" height="0em">
                      <p></p>
                      <img id="img1" src="{{asset('assets/images/rojo1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img2" src="{{asset('assets/images/naranja1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img3" src="{{asset('assets/images/verde1.png')}}" class="blink" width="100em" height="100em" alt="">
                      <p></p>

                    </svg>

                  </div>

                  <div style="margin-right: 2em;margin-left: 2em;">
                    <p>CHICOS 2</p>
                    <svg id="sema2" width="1em" height="0em">
                      <p></p>
                      <img id="img4" src="{{asset('assets/images/rojo1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img5" src="{{asset('assets/images/naranja1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img6" src="{{asset('assets/images/verde1.png')}}" class="blink" width="100em" height="100em" alt="">
                      <p></p>

                    </svg>

                  </div>

                  <div style="margin-right: 2em;margin-left: 2em;">
                    <p>CHICAS 1</p>
                    <svg id="sema3" width="1em" height="0em">
                      <p></p>
                      <img id="img7" src="{{asset('assets/images/rojo1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img8" src="{{asset('assets/images/naranja1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img9" src="{{asset('assets/images/verde1.png')}}" class="blink" width="100em" height="100em" alt="">
                      <p></p>

                    </svg>

                  </div>

                  <div style="margin-right: 2em;margin-left: 2em;">
                    <p>CHICAS 2</p>
                    <svg id="sema4" width="1em" height="0em">
                      <p></p>
                      <img id="img10" src="{{asset('assets/images/rojo1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img11" src="{{asset('assets/images/naranja1.png')}}" class="" width="100em" height="100em" alt="">
                      <p></p>
                      <p></p>
                      <img id="img12" src="{{asset('assets/images/verde1.png')}}" class="blink" width="100em" height="100em" alt="">
                      <p></p>

                    </svg>

                  </div>

                </div>





              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <div class="busqueda">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content align-items-center">
              <div class="row">
                <h1>Buscar alumno</h1>
                <section>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6offset-md-3">
                        <div class="card">
                          <div class="card-header">

                          </div>
                          <div class="car-body" style="padding-top: 30px;padding-bottom:40px;padding-left:20px;padding-right:20px;">


                            <form action="{{route('entrada')}}" method="POST" autocomplete="off">
                              @csrf
                              <input class="form-control typeahead" type="text" id="alumnos" name="alumnos" style="margin-bottom:10px">
                              <button id="entrada">Entrada</button>

                              <select name="banos" id="banos">

                                <option>Baño 1(Chicos)</option>
                                <option>Baño 2(Chicos)</option>
                                <option>Baño 1(Chicas)</option>
                                <option>Baño 2(Chicas)</option>

                              </select>
                            </form>

                            <form action="{{route('salida')}}" method="POST" autocomplete="off">
                              @csrf
                              <input class="form-control typeahea" type="text" id="alumnos2" name="alumnos2" style="margin-bottom:10px">
                              <button>Salida</button>
                              <select name="banos1" id="banos1">

                                <option>Baño 1(Chicos)</option>
                                <option>Baño 2(Chicos)</option>
                                <option>Baño 1(Chicas)</option>
                                <option>Baño 2(Chicas)</option>

                              </select>
                            </form>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

  @yield('content')

</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  var path = "{{route('autocomplete')}}";
  $('input.typeahead').typeahead({
    source: function(terms, process) {
      return $.get(path, {
        terms: terms
      }, function(data) {
        return process(data);
      });

    }
  });
</script>

<script>
  var myVar;
  var banio;

  $('input.typeahea').typeahead({
    source: function(terms, process) {
      return $.get("{{route('autocompletes')}}", {
        terms: terms
      }, function(data) {
        return process(data);
      });

    }
  });

  function myFunction() {
    myVar = setTimeout(showPage, 250);
  }

  function cambiarblink1() {
    document.getElementById('img3').classList.remove("blink");
    document.getElementById('img1').classList.add("blink");
  }

  function cambiarblink2() {
    document.getElementById('img6').classList.remove("blink");
    document.getElementById('img4').classList.add("blink");
  }

  function cambiarblink3() {
    document.getElementById('img9').classList.remove("blink");
    document.getElementById('img7').classList.add("blink");
  }

  function cambiarblink4() {
    document.getElementById('img12').classList.remove("blink");
    document.getElementById('img10').classList.add("blink");
  }



  document.getElementById("entrada").onclick = function() {
    banio = document.getElementById("banos").value;
    if (banio == "Baño 1(Chicos)") {
      cambiarblink1();
    }
    if (banio == "Baño 2(Chicos)") {
      cambiarblink2();
    }
    if (banio == "Baño 1(Chicas)") {
      cambiarblink3();
    }
    if (banio == "Baño 2(Chicas)") {
      cambiarblink4();
    }
  };



  function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDivmain").style.display = "block";
    document.getElementById("myDivlogin").style.display = "block";
  }




  if (localStorage.a === '1') {
    localStorage.setItem("lastname", "linear-gradient(50deg, #5E5E5E 50%, #7F7F7F 50%)");
    document.body.style.background = localStorage.getItem("lastname");

  }
  if (localStorage.a === '2') {
    localStorage.setItem("lastname", "linear-gradient((50deg, #FF8112 50%, #00B3D6 50%)");
    document.body.style.background = localStorage.getItem("lastname");
  }
  if (localStorage.a === '3') {
    localStorage.setItem("lastname", "linear-gradient(50deg, #8c004b 50%, #ff0000 50%)");
    document.body.style.background = localStorage.getItem("lastname");
  }

  function cambiarcoloroscuro() {

    localStorage.setItem('a', '1');
    location.reload();

  }

  function cambiarcolornormal() {

    localStorage.setItem('a', '2');
    location.reload();


  }

  function cambiarcolorabstracto() {

    localStorage.setItem('a', '3');
    location.reload();


  }
</script>