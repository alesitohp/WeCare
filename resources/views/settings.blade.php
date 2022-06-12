@extends('layout')
  
@section('content')
<style>
    .imagen{
            position: absolute; 
            left: 35px; 
            bottom: 0px;
            top: 35px;

        }
    .des{
        display: none;
    }
    .mains{
            margin-top: 100px;
            display: none;
        }
   
</style>
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
          <div style="display:none;" id="myDivlogin" class="animate-bottom">
              <div class="card">
                  <div class="card-header" id="ajustes">Ajustes</div>
                  <div class="card-body">
                      <p id="cambiaridioma">Idioma</p>
                      <div class="btn-group">
                        <button id="cambiares" onclick="español()">Esp</button>
                        <button id="cambiareng" onclick="ingles()">Eng</button>
                        <button id="cambiarale" onclick="aleman()">Ale</button>
                    </div>

                    <p class="theme" id="tema">Tema</p>
                    <div class="btn-group">
                        <button id="oscuro" onclick="cambiarcoloroscuro()">Oscuro</button>
                        <button id="normal" onclick="cambiarcolornormal()">Predeterminado</button>
                        <button id="abstracto" onclick="cambiarcolorabstracto()">Abstracto</button>
                    </div> 
                    <p class="theme" id="correoc">Cambiar correo electrónico</p>  
                    

                    <form action="{{route('correo')}}" method="POST">
                    @csrf
                    <input type="text" name="correo" id="correo"> 
                    <button id="enviar">Enviar</button>

                    

                    <img src="{{asset('assets/images/tick.png')}}" class="des" id="tickcross" width="50" height="50" alt="">
                    </form>

                    <form action="{{route('contra')}}" method="POST">
                    @csrf
                    <p class="theme" id="contra">Cambiar contraseña</p> 
                    <input type="text"  name="contra" id="contra"> 
                    <button id="enviarc">Enviar</button>
                    </form>

                    <a href="{{route('dashboard')}}" id="atras" class="btn btn-default">Atras</a> 
                    
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
</main>


<script>
    
    if (localStorage.lang === 'esp') {
    
    document.getElementById("cambiaridioma").innerHTML = "Idioma";
    document.getElementById("ajustes").innerHTML = "Ajustes";
    document.getElementById("tema").innerHTML = "Tema";
    document.getElementById("oscuro").innerHTML = "Oscuro";
    document.getElementById("normal").innerHTML = "Predeterminado";
    document.getElementById("abstracto").innerHTML = "Abstracto";
    document.getElementById("correoc").innerHTML = "Cambiar correo electrónico";
    document.getElementById("contra").innerHTML = "Cambiar contraseña";
    document.getElementById("enviar").innecrHTML = "Enviar";
    document.getElementById("enviar").innerHTML = "Enviar";
    document.getElementById("atras").innerHTML = "Atras";
    

    }
        
if (localStorage.lang === 'eng') {         
    document.getElementById("cambiaridioma").innerHTML ="Language"; 
    document.getElementById("ajustes").innerHTML = "Settings";
    document.getElementById("tema").innerHTML = "Theme";
    document.getElementById("oscuro").innerHTML = "Dark";
    document.getElementById("normal").innerHTML = "Default";
    document.getElementById("abstracto").innerHTML = "Abstract";
    document.getElementById("correoc").innerHTML = "Change email adress";
    document.getElementById("contra").innerHTML = "Change password";
    document.getElementById("enviar").innerHTML = "Send";
    document.getElementById("enviarc").innerHTML = "Send";
    document.getElementById("atras").innerHTML = "Back";
    

    }

    if (localStorage.lang === 'ale') {
    
    
    document.getElementById("cambiaridioma").innerHTML = "Idiom";
    document.getElementById("ajustes").innerHTML = "Einstellung";
    document.getElementById("tema").innerHTML = "Aussehen";
    document.getElementById("oscuro").innerHTML = "Dunkel";
    document.getElementById("normal").innerHTML = "Vorbestimmt";
    document.getElementById("abstracto").innerHTML = "Abstrakt";
    document.getElementById("correoc").innerHTML = "E-Mail Adresse ändern";
    document.getElementById("contra").innerHTML = " Passwort ändern";
    document.getElementById("enviar").innerHTML = "Senden";
    document.getElementById("enviarc").innerHTML = "Senden";
    document.getElementById("atras").innerHTML = "Hinter";

    
    } 
    function español(){

localStorage.setItem('lang', 'esp');
location.reload();
}
    
function ingles(){

localStorage.setItem('lang', 'eng');
location.reload();


}
function aleman(){

localStorage.setItem('lang', 'ale');
location.reload();


} 

    
    
</script>

@endsection