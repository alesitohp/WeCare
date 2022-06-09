@extends('layout')

@section('content')
<style>
    .imagen {
        position: absolute;
        left: 35px;
        bottom: 0px;
        top: 35px;

    }

    .rojo {
        color: red;
        display: inline-block;
    }

    .mains {
        margin-top: 100px;
        display: none;
    }
</style>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                            <button>Enviar</button>

                            <img src="{{asset('assets/images/cross.png')}}" id="tickcross" width="50" height="50" alt="">
                            <p class="rojo">Error</p>
                        </form>


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

    }

    if (localStorage.lang === 'eng') {
        document.getElementById("cambiaridioma").innerHTML = "Language";
        document.getElementById("ajustes").innerHTML = "Settings";
        document.getElementById("tema").innerHTML = "Theme";
        document.getElementById("oscuro").innerHTML = "Dark";
        document.getElementById("normal").innerHTML = "Default";
        document.getElementById("abstracto").innerHTML = "Abstract";
        document.getElementById("correoc").innerHTML = "Change email adress";


    }

    if (localStorage.lang === 'ale') {


        document.getElementById("cambiaridioma").innerHTML = "Idiom";
        document.getElementById("ajustes").innerHTML = "Einstellung";
        document.getElementById("tema").innerHTML = "Aussehen";
        document.getElementById("oscuro").innerHTML = "Dunkel";
        document.getElementById("normal").innerHTML = "Vorbestimmt";
        document.getElementById("abstracto").innerHTML = "Abstrakt";
        document.getElementById("correoc").innerHTML = "E-Mail Adresse ändern";


    }

    function español() {

        localStorage.setItem('lang', 'esp');
        location.reload();
    }

    function ingles() {

        localStorage.setItem('lang', 'eng');
        location.reload();


    }

    function aleman() {

        localStorage.setItem('lang', 'ale');
        location.reload();


    }
</script>

@endsection