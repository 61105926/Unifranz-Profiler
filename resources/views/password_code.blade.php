<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="QUOTE - Request a quote for every type of companies">
    <meta name="author" content="Ansonika">
    <title>INICIO</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/js/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/js/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/js/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/js/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/js/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="assets/layerslider/css/layerslider.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icon_fonts/assets/css/all_icons_min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.min.css" rel="stylesheet">
    <link href="assets/css/skins/square/yellow.css" rel="stylesheet">
    <style>
        .button2 {
            display: none;
            margin-left: 41%;
            width: 120px;


            border: none;
            font-family: inherit;
            font-size: inherit;
            color: #fff;
            background: #fa5001;
            cursor: pointer;
            padding: 7px 100px;
            outline: none;
            font-size: 20px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            font-weight: 700;
            top: auto;
        }
    </style>
    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /Loader_form -->



    <div id="layerslider" class="fullsize" style="width:1200px;height:100vh;">
        <!-- First slide -->
        <div class="ls-slide" data-ls="duration: 8000; transition2d: 5;bgsize:cover;bgposition:50% 50%;kenburnszoom:in;">
            <img src="assets/img/slides/fond.jpg" class="ls-bg" alt="Slide background">
            <p style="font-size:72px; color:#fff;top:40%; left:70px;line-height:1;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.60); padding-left:100px; letter-spacing:-1px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:800;offsetxout:-100;durationout:1000;"><strong>UNIFRANZ TEST VOCACIONAL</strong></p>
            <p style="font-size:70px; color:#fff;top:55%; left:120px;line-height:1;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.60); padding-left:100px; letter-spacing:-1px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:1500;offsetxout:-100;durationout:1000;">
                <input type="password" name="password" id="password" maxlength="6" placeholder="Introduzca el codigo" class="icheck required" style="text-align:center;">
            </p>
            <p style="font-size:70px; color:#fff;top:70%; left:10px;line-height:1;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.60); padding-left:500px; letter-spacing:-1px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:800;offsetxout:-100;durationout:1000;">
                <button class="btn_2 medium" id="button1" onclick="onSubmit()">Ingresar</button>
            </p>
            <p style="font-size:70px; color:#fff;top:90%; left:10px;line-height:1;text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.60); padding-left:500px; letter-spacing:-1px;" class="ls-l sliderleft" data-ls="offsetxin:-100;durationin:2000;delayin:800;offsetxout:-100;durationout:1000;">
                <button class="button2" id="button2"><a href="{{route('welcome')}}" target="_blank">COMENZAR</a></button></button>
            </p>
        </div>

        @foreach ($numero as $numeros)
        <input type="hidden" name="valor" id="valor" value="{{$numeros->numero}}">
        @endforeach


    </div>
    <div id=" additional_links">
        <ul>
            <p>&copy; {{now()->year}} - Unifranz | Innovación en educación</p>
        </ul>
    </div><!-- /add links -->


    <!-- Modal terms -->


    <!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Layer slider -->
    <script src="assets/layerslider/js/greensock.js"></script>
    <script src="assets/layerslider/js/layerslider.transitions.js"></script>
    <script src="assets/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="assets/js/slider_func.js"></script>
    <!-- Common script -->
    <script src="assets/js/common_scripts_min.js"></script>
    <!-- Theme script -->
    <script src="assets/js/functions_with_branch.js"></script>
    <!-- Google map -->
    <script src="assets/js/mapmarker.jquery.js"></script>
    <script src="assets/js/mapmarker_func.jquery.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        function onSubmit() {

            if (document.getElementById('password').value == document.getElementById('valor').value) {
                window.button2.style.display = "block";
            } else {
                swal('Codigo Incorrecto', 'Pida el codigo correcto', 'error');
            }
        }
    </script>
</body>

</html>