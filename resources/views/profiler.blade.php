<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="QUOTE - Request a quote for every type of companies">
    <meta name="author" content="Ansonika">
    <title>UNIFRANZ|PERFILADOR</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icon_fonts/assets/css/all_icons_min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body id="background_color_in">



    <div class="subheader_in" id="services"></div>

    <div class="container margin_60_35">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>

                    <div class="col-md-12">
                        <div id="middle-wizard">
                            <div class="submit step">
                                <h2>Felicidades! El test se procesó correctamente.</h2>
                                <h3 class="main_question">Tus intereses están relacionados con carreras de:</h3>

                                <div class="form-group radio_questions">

                                    @if($highScore == 'administrative')
                                    <label>ADMINISTRACION DE EMPRESAS
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>ADMINISTRACION HOTELERIA Y TURISMO
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>CONTABILIDAD
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore=='humanistic')
                                    <label>PSICOLOGIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore=='artistic')
                                    <label>DISEÑO GRAFICO Y CROSMEDIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore=='medicine')
                                    <label>BIOQUIMICA Y FARMACIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>ENFERMERIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>ODONTOLOGIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>MEDICINA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore=='engineering')
                                    <label>INGENIERIA COMERCIAL
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>INGENIERIA EN SISTEMAS
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore=='science')
                                    <label>BIOLOGIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>MATEMATICAS
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>INGENIERIA AGRONOMA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore=='security')
                                    <label>DERECHO
                                        <input type="radio" class="icheck required">
                                    </label>

                                    @endif


                                </div>
                                <h3 class="main_question">Tambien tienes intereses en:</h3>

                                <div class="form-group radio_questions">

                                    @if($highScore2 == 'administrative')
                                    <label>ADMINISTRACION DE EMPRESAS
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>ADMINISTRACION HOTELERIA Y TURISMO
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>CONTABILIDAD
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore2 =='humanistic')
                                    <label>PSICOLOGIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore2 =='artistic')
                                    <label>DISEÑO GRAFICO Y CROSMEDIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore2 =='medicine')
                                    <label>BIOQUIMICA Y FARMACIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>ENFERMERIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>ODONTOLOGIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>MEDICINA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore2 =='engineering')
                                    <label>INGENIERIA COMERCIAL
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>INGENIERIA EN SISTEMAS
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore2 =='science')
                                    <label>BIOLOGIA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>MATEMATICAS
                                        <input type="radio" class="icheck required">
                                    </label>
                                    <label>INGENIERIA AGRONOMA
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @elseif($highScore2 =='security')
                                    <label>DERECHO
                                        <input type="radio" class="icheck required">
                                    </label>
                                    @endif
                                </div>
                            </div><!-- /step 1-->
                            <h3>Recomendaciones</h3>
                            <ul class="list_ok">
                                <li>Buscar información de las carreras que salieron en la prueba, conversando con profesionales o consultando guías de profesiones y/o visitando páginas webs de las universidades.</li>
                                <li>Tenga en cuenta que la elección vocacional es un proceso que está unido con la madurez, por lo que los resultados que se presentan ahora pueden variar o en lo mejor de los casos estabilizarse con el transcurrir de los años.</li>
                                <li>En vacaciones buscar inscribirse a un taller o grupo para explorar de manera práctica sus intereses y aptitudes, esto le ayudará más adelante en su decisión vocacional. </li>
                            </ul>


                        </div><!-- /middle-wizard -->
                        <!-- Headings & Paragraph Copy -->




                    </div>

                    <!-- Edn row -->


                </div>

                <footer>
                    <ul>
                        <li>© 2022 Unifranz</li>

                    </ul>
                </footer>
                <!-- End footer-->

                <!-- COMMON SCRIPTS -->
                <script src="assets/js/jquery-3.6.0.min.js"></script>
                <script src="assets/js/common_scripts_min.js"></script>
                <script src="assets/js/functions.js"></script>

</body>

</html>