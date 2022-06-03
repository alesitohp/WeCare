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
    </style>
</head>
<body>
    
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

            </ul>
  
        </div>
    </div>
</nav>
<main class="login-form mains">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-body">
                      
                      <div class="btn-group">
                       
                    </div>

                    
                    
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
  
@yield('content')
     
</body>
</html>
<script>
                if (localStorage.todolocal === '1') {
                localStorage.setItem("lastname", "linear-gradient(50deg, #5E5E5E 50%, #7F7F7F 50%)");
                document.body.style.background=localStorage.getItem("lastname");

                }
                if (localStorage.todolocal === '2') {
                localStorage.setItem("lastname", "linear-gradient((50deg, #FF8112 50%, #00B3D6 50%)");
                document.body.style.background=localStorage.getItem("lastname");
                }
                if (localStorage.todolocal === '3') {
                localStorage.setItem("lastname", "linear-gradient(50deg, #8c004b 50%, #ff0000 50%)");
                document.body.style.background=localStorage.getItem("lastname");
                }

                function cambiarcoloroscuro(){

                localStorage.setItem('todolocal', '1');
                location.reload();

                }
                function cambiarcolornormal(){

                localStorage.setItem('todolocal', '2');
                location.reload();


                }
                function cambiarcolorabstracto(){

                localStorage.setItem('todolocal', '3');
                location.reload();


                }
        // Store

    
   
</script>