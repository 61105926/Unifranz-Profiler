<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="QUOTE - Request a quote for every type of companies">
    <meta name="author" content="Ansonika">
    <title>UNIFRANZ|PERFILADOR</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">



    <!-- BASE CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.min.css" rel="stylesheet">
    <link href="assets/css/skins/square/yellow.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /Loader_form -->

    <header>


        <a id="menu-button-mobile" class="cmn-toggle-switch cmn-toggle-switch__htx" href="javascript:void(0);"><span>Menu mobile</span></a>
        <nav class="main_nav">

            <a href="#tab_1" id="tabQuiz" data-toggle="tab" style="display:none;" class="nodisplay"></a>
            <ul class="nav nav-tabs">
                <li class="nav-item {{ request()->routeIs('iniciar-sesion') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesi??n</a>
                </li>

            </ul>
        </nav>
    </header><!-- /header -->

    <div class="intro_txt animated fadeInUp">
        <h2>Test de Orientaci??n Vocacional</h2>
        <p>Descubre cual es tu talento para seguir tu carrera profesional</p>
        <br>
        <p>
            <a id="home-tab" class="btn_1 medium" href="#">Comenzar</a>

        </p>

    </div><!-- /intro_txt -->

    <video id="my-video" class="video" loop muted autoplay playsinline>
        <source src="assets/media/demo1.mp4" type="video/mp4">
        <source src="assets/media/demo1.ogv" type="video/ogg">
        <source src="assets/media/demo1.webm" type="video/webm">
    </video><!-- /video -->
    <div class="video_fallback"></div>
    <!-- <div id="my-video" class="video">
        <img src="assets/img/wallpaper.jp">

    </div> -->
    <div class="layer"></div><!-- /mask -->

    <div id="main_container">

        <div id="header_in">
            <a href="#0" class="close_in "><i class="pe-7s-close-circle"></i></a>
        </div>

        <div class="wrapper_in">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tab_1">

                        <div class="row">
                            <aside class="col-xl-3 col-lg-8">
                                <h3>??CADA PERSONA ES ??NICA!</h3>
                                <p class="lead">Est??s muy cerca de conocer qu?? programas de UNIFRANZ son m??s afines a tus gustos, habilidades, talentos, pasiones y preferencias.</p>
                                <ul class="list_ok">
                                    <li>Le?? atentamente cada pregunta.</li>
                                    <li>Marc?? la respuesta SI o No seg??n tu criterio.</li>
                                    <li>Los resultados de este test, que contempla tus intereses y tus aptitudes, se ofrecen s??lo a modo de sugerencia.</li>
                                </ul>
                            </aside><!-- /aside -->

                            <div class="col-xl-9 col-lg-8">
                                <div id="wizard_container">
                                    <div id="top-wizard">
                                        <hr>
                                        <strong>Progreso</strong>
                                        <div id="progressbar"></div>
                                    </div>
                                    <form name="example-1" id="wrapped" method="POST">
                                        @csrf
                                        <input id="website" name="website" type="text" value=""><!-- Leave for  protection, read docs for details -->
                                        <div id="middle-wizard">
                                            <div class="step">
                                                <h3 class="main_question"><strong>1/98</strong>??Aceptar??as trabajar escribiendo art??culos en la secci??n econ??mica de un diario?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[1]" id="question_1_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[1]" id="question_1_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 2 -->
                                                <h3 class="main_question"><strong>2/98</strong>??Te ofrecer??as para organizar la despedida de soltero de uno de tus amigos?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrativeA[3]" id="Apregunta_1_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrativeA[3]" id="Apregunta_1_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>3/98</strong>??Te gustar??a dirigir un proyecto de urbanizaci??n en tu provincia?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input name="artistic[1]" type="radio" id="question_3_1 value=" 1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input name="artistic[1]" type="radio" id="question_3_1 value=" 0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>4/98</strong>??A una frustraci??n siempre opones un pensamiento positivo?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicineA[1]" id="Aquestion_5_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicineA[1]" id="Aquestion_5_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>5/98</strong>??Te dedicar??as a socorrer a personas accidentadas o atacadas por asaltantes?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[1]" id="question_6_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[1]" id="question_6_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>6/98</strong>??Cuando eras chico, te interesaba saber c??mo estaban construidos tus juguetes?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[1]" id="question_4_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[1]" id="question_4_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>7/98</strong>??Te interesan m??s los misterios de la naturaleza que los secretos de la tecnolog??a?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="scienceA[1]" id="questionA_7_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="scienceA[1]" id="questionA_7_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>8/98</strong>??Escuchas atentamente los problemas que te plantean tus amigos?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[1]" id="question_5_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[1]" id="question_5_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>9/98</strong>??Te ofrecer??as para explicar a tus compa??eros un determinado tema que ellos no entendieron?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[1]" id="question_2_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[1]" id="question_2_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>10/98</strong>??Eres exigente y cr??tico con tu equipo de trabajo?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineeringA[1]" id="Aquestion_4_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineeringA[1]" id="Aquestion_4_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>11/98</strong>11 ??Te atrae armar rompecabezas o puzzles?
                                                </h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[3]" id="question_3_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[3]" id="question_3_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>12/98</strong>??Puedes establecer la diferencia conceptual entre macroeconom??a y microeconom??a?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[2]" id="question_1_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[2]" id="question_1_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>13/98</strong>??Usar uniforme te hace sentir distinto, importante?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="securityA[1]" id="Aquestion_6_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="securityA[1]" id="Aquestion_6_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>14/98</strong>??Participar??as como profesional en un espect??culo de acrobacia a??rea?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[2]" id="question_6_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[2]" id="question_6_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>15/98</strong>??Organizas tu dinero de manera que te alcance hasta la pr??xima mesada?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrativeA[1]" id="Aquestion1_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrativeA[1]" id="Aquestion1_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>16/98</strong>??Convences f??cilmente a otras personas sobre la validez de tus argumentos?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[2]" id="question_5_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[2]" id="question_5_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>17/98</strong>??Te gratificar??a el trabajar con ni??os? </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[1]" id="question_7_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[1]" id="question_7_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>18/98</strong> ??Ante una situaci??n de emergencia act??as r??pidamente? </h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="securityA[2]" id="Aquestion_6_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="securityA[2]" id="Aquestion_6_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>19/98</strong>??Cuando tienes que resolver un problema matem??tico, perseveras hasta encontrar la soluci??n?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[2]" id="question_4_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[2]" id="question_4_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>20/98</strong>??Si te convocara tu club preferido para planificar, organizar y dirigir un campo de deportes,aceptar??as?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[3]" id="question_1_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[3]" id="question_1_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>21/98</strong>??Eres el que pone un toque de alegr??a en las fiestas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[4]" id="question_3_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[4]" id="question_3_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>22/98</strong>??Crees que los detalles son tan importantes como el todo?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artisticA[1]" id="Aquestion_3_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artisticA[1]" id="Aquestion_3_1" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>23/98</strong>??Te sentir??as a gusto trabajando en un ??mbito hospitalario?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[3]" id="question_5_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[3]" id="question_5_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>24/98</strong>??Te gustar??a participar para mantener el orden ante grandes des??rdenes y cataclismos?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[3]" id="question_6_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[3]" id="question_6_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>25/98</strong>??Pasar??as varias horas leyendo alg??n libro de tu inter??s?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[2]" id="question_2_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[2]" id="question_2_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>26/98</strong> ??Planificas detalladamente tus trabajos antes de empezar?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineeringA[2]" id="Aquestion_4_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineeringA[2]" id="Aquestion_4_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>27/98</strong>??Entablas una relaci??n casi personal con tu computadora?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[3]" id="question_4_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[3]" id="question_4_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>28/98</strong>??Disfrutas modelando con arcilla?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[5]" id="question_3_5" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[5]" id="question_3_5" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>29/98</strong>??Ayudas habitualmente a los no videntes a cruzar la calle?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicineA[2]" id="Aquestion_5_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicineA[2]" id="Aquestion_5_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>30/98</strong>??Consideras importante que desde la escuela primaria se fomente la actitud cr??tica y la participaci??n activa?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanisticA[2]" id="Aquestion_2_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanisticA[2]" id="Aquestion_2_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->

                                                <h3 class="main_question"><strong>31/98</strong>??Aceptar??as que las mujeres formaran parte de las fuerzas armadas bajo las mismas normas que los hombres?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[4]" id="question_6_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[4]" id="question_6_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>32/98</strong>??Te gustar??a crear nuevas t??cnicas para descubrir las patolog??as de algunas enfermedades a trav??s del microscopio?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[2]" id="question_7_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[2]" id="question_7_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>33/98</strong>??Participar??as en una campa??a de prevenci??n contra la enfermedad de Chagas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[4]" id="question_5_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[4]" id="question_5_4" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>34/98</strong>??Te interesan los temas relacionados al pasado y a la evoluci??n del hombre?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[3]" id="question_2_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[3]" id="question_2_3" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>35/98</strong>??Te incluir??as en un proyecto de investigaci??n de los movimientos s??smicos y sus consecuencias?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[3]" id="question_7_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[3]" id="question_7_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>36/98</strong>??Fuera de los horarios escolares, dedicas alg??n d??a de la semana a la realizaci??n de actividades corporales?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[6]" id="question_3_6" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[6]" id="question_3_6" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>37/98</strong> ??Te interesan las actividades de mucha acci??n y de reacci??n r??pida en situaciones imprevistas y de peligro?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[5]" id="question_6_5" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[5]" id="question_6_5" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>38/98</strong> ??Te ofrecer??as para colaborar como voluntario en los gabinetes espaciales de la NASA?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input n type="radio" name="engineering[4]" id="question_4_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[4]" id="question_4_4" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>39/98</strong>??Te gusta m??s el trabajo manual que el trabajo intelectual?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artisticA[2]" id="Aquestion_3_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artisticA[2]" id="Aquestion_3_2" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>40/98</strong>??Estar??as dispuesto a renunciar a un momento placentero para ofrecer tu servicio como profesional?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicineA[3]" id="Aquestion_5_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicineA[3]" id="Aquestion_5_3" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>41/98</strong>??Participar??as de una investigaci??n sobre la violencia en el f??tbol?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[4]" id="question_2_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[4]" id="question_2_4" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->

                                                <h3 class="main_question"><strong>42/98</strong>??Te gustar??a trabajar en un laboratorio mientras estudias?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[4]" id="question_7_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[4]" id="question_7_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>43/98</strong>??Arriesgar??as tu vida para salvar la vida de otro que no conoces?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="securityA[3]" id="Aquestion_6_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="securityA[3]" id="Aquestion_6_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>44/98</strong>??Te agradar??a hacer un curso de primeros auxilios?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[5]" id="question_5_5" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[5]" id="question_5_5" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>45/98</strong> ??Tolerar??as empezar tantas veces como fuere necesario hasta obtener el logro deseado?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[7]" id="question_3_7" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[7]" id="pregunta_3_7" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>46/98</strong>??Distribuyes tu horarios del d??a adecuadamente para poder hacer todo lo planeado?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrativeA[4]" id="Aquestion_1_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrativeA[4]" id="Aquestion_1_4" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>47/98</strong>??Har??as un curso para aprender a fabricar los instrumentos y/o piezas de las m??quinas o aparatos con que trabajas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[5]" id="question_4_5" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[5]" id="question_4_5" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>48/98</strong>??Elegir??as una profesi??n en la tuvieras que estar algunos meses alejado de tu familia, por ejemplo el marino?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[6]" id="question_6_6" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[6]" id="question_6_6" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>49/98</strong> ??Te radicar??as en una zona agr??cola-ganadera para desarrollar tus actividades como profesional?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[5]" id="question_7_5" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[5]" id="question_7_5" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>50/98</strong>??Cuando est??s en un grupo trabajando, te entusiasma producir ideas originales y que sean tenidas en cuenta?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[2]" id="question_3_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[2]" id="question_3_2" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>51/98</strong>??Te resulta f??cil coordinar un grupo de trabajo?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrativeA[2]" id="Aquestion_1_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrativeA[2]" id="Apregunta_1_2" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>52/98</strong>??Te result?? interesante el estudio de las ciencias biol??gicas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[6]" id="question_5_6" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[6]" id="question_5_6" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>53/98</strong>??Si una gran empresa solicita un profesional como gerente de comercializaci??n, te sentir??as a gusto desempe??ando ese rol?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[4]" id="question_1_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[4]" id="question_1_4" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>54/98</strong>??Te incluir??as en un proyecto nacional de desarrollo de la principal fuente de recursos de tu provincia?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[6]" id="question_4_6" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[6]" id="question_4_6" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>55/98</strong>??Tienes inter??s por saber cuales son las causas que determinan ciertos fen??menos, aunque saberlo no altere tu vida?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="scienceA[2]" id="questionA_7_2" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="scienceA[2]" id="questionA_7_2" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>56/98</strong>??Descubriste alg??n fil??sofo o escritor que haya expresado tus mismas ideas con antelaci??n?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[5]" id="pregunta_2_5" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[5]" id="pregunta_2_5" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>57/98</strong>??Desear??as que te regalen alg??n instrumento musical para tu cumplea??os?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[8]" id="question_3_8" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[8]" id="question_3_8" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>58/98</strong>??Aceptar??as colaborar con el cumplimiento de las normas en lugares p??blicos?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[7]" id="question_6_7" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[7]" id="question_6_7" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>59/98</strong>??Crees que tus ideas son importantes, y haces todo lo posible para ponerlas en pr??ctica?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineeringA[3]" id="Aquestion_4_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineeringA[3]" id="Aquestion_4_3" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>60/98</strong>??Cuando se descompone un artefacto en tu casa, te dispones prontamente a repararlo?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[7]" id="question_4_7" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[7]" id="question_4_7" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>61/98</strong>??Formar??as parte de un equipo de trabajo orientado a la preservaci??n de la flora y la fauna en extinci??n?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[6]" id="question_7_6" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[6]" id="question_7_6" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>62/98</strong>??Acostumbras a leer revistas relacionadas con los ??ltimos avances cient??ficos y tecnol??gicos en el ??rea de la salud?

                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[7]" id="question_5_7" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[7]" id="question_5_7" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>63/98</strong> ??Preservar las ra??ces culturales de nuestro pa??s, te parece importante y necesario?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanisticA[1]" id="Aquestion_2_1" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanisticA[1]" id="Aquestion_2_1" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>64/98</strong>??Te gustar??a realizar una investigaci??n que contribuyera a hacer m??s justa la distribuci??n de la riqueza?

                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[5]" id="question_1_5" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[5]" id="question_1_5" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>65/98</strong>??Te gustar??a realizar tareas auxiliares en una nave, como por ejemplo izado y arriado de velas, pintura y conservaci??n del casco, arreglo de aver??as, conservaci??n de motores, etc?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[8]" id="question_6_8" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[8]" id="question_6_8" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>66/98</strong>??Crees que un pa??s debe poseer la m??s alta tecnolog??a armamentista, a cualquier precio?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="securityA[4]" id="Aquestion_6_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="securityA[4]" id="Aquestion_6_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>67/98</strong> ??La libertad y la justicia son valores fundamentales en tu vida?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[6]" id="question_2_6" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[6]" id="question_2_6" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>68/98</strong>??Aceptar??as hacer una pr??ctica rentada en una industria de productos alimenticios en el sector de control de calidad?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[7]" id="question_7_7" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[7]" id="question_7_7" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>69/98</strong>??Consideras que la salud p??blica debe ser prioritaria, gratuita y eficiente para todos?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicineA[4]" id="Aquestion_5_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicineA[4]" id="Aquestion_5_4" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>70/98</strong>??Te interesar??a investigar sobre alguna nueva vacuna?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[8]" id="question_5_8" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[8]" id="question_5_8" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>71/98</strong>??En un equipo de trabajo, prefieres el rol de coordinador?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[6]" id="question_1_6" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input n type="radio" name="administrative[6]" id="question_1_6" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>72/98</strong>??En una discusi??n entre amigos, te ofreces como mediador?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanisticA[3]" id="Aquestion_2_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanisticA[3]" id="Aquestion_2_3" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>73/98</strong>??Est??s de acuerdo con la formaci??n de un cuerpo de soldados profesionales?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[9]" id="question_6_9" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[9]" id="question_6_9" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>74/98</strong>??Luchar??as por una causa justa hasta las ??ltimas consecuencias?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[7]" id="question_2_7" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[7]" id="question_2_7" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>75/98</strong>??Te gustar??a investigar cient??ficamente sobre cultivos agr??colas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[8]" id="question_4_8" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[8]" id="question_4_8" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>76/98</strong>??Har??as un nuevo dise??o de una prenda pasada de moda, ante una reuni??n imprevista?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artisticA[3]" id="Aquestion_3_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artisticA[3]" id="Aquestion_3_3" value="0" class="icheck required">
                                                    </label>
                                                </div> <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>77/98</strong>??Visitar??as un observatorio astron??mico para conocer en acci??n el funcionamiento de los aparatos?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[8]" id="question_7_8" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[8]" id="question_7_8" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>78/98</strong>??Dirigir??as el ??rea de importaci??n y exportaci??n de una empresa?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[7]" id="question_1_7" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[7]" id="question_1_7" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>79/98</strong>??Te inhibes al entrar a un lugar nuevo con gente desconocida?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="scienceA[3]" id="questionA_7_3" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="scienceA[3]" id="questionA_7_3" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>80/98</strong>??Te gratificar??a el trabajar con ni??os? </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[8]" id="question_2_8" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[8]" id="question_2_8" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>81/98</strong>??Har??as el dise??o de un afiche para una campa??a contra el SIDA?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[9]" id="question_3_9" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[9]" id="question_3_9" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>82/98</strong>??Dirigir??as un grupo de teatro independiente?

                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artisticA[4]" id="Aquestion_3_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artisticA[4]" id="Aquestion_3_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>83/98</strong>??Enviar??as tu curriculum a una empresa automotriz que solicita gerente para su ??rea de producci??n?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[9]" id="question_4_9" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[9]" id="question_4_9" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>84/98</strong>??Participar??as en un grupo de defensa internacional dentro de alguna fuerza armada?</h3>
                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="security[10]" id="question_6_10" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="security[10]" id="question_6_10" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>85/98</strong>??Te costear??as tus estudios trabajando en una auditor??a?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[8]" id="question_1_8" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[8]" id="question_1_8" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>86/98</strong>??Eres de los que defienden causas perdidas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanisticA[4]" id="Aquestion_2_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanisticA[4]" id="Aquestion_2_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>87/98</strong>??Ante una emergencia epid??mica participar??as en una campa??a brindando tu ayuda?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[9]" id="question_5_9" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[9]" id="question_5_9" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>88/98</strong>??Sabr??as responder que significa ADN y ARN?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[9]" id="question_7_9" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[9]" id="question_7_9" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>89/98</strong>??Elegir??as una carrera cuyo instrumento de trabajo fuere la utilizaci??n de un idioma extranjero?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[9]" id="question_2_9" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[9]" id="question_2_9" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>90/98</strong>??Trabajar con objetos te resulta m??s gratificante que trabajar con personas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineeringA[4]" id="Aquestion_4_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineeringA[4]" id="Aquestion_4_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>91/98</strong>??Te resultar??a gratificante ser asesor contable en una empresa reconocida?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[9]" id="question_1_9" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[9]" id="question_1_9" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>92/98</strong>??Ante un llamado solidario, te ofrecer??as para cuidar a un enfermo?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="medicine[10]" id="question_5_10" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="medicine[10]" id="question_5_10" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>93/98</strong>??Te atrae investigar sobre los misterios del universo, por ejemplo los agujeros negros?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="science[10]" id="question_7_10" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="science[10]" id="question_7_10" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>94/98</strong>??El trabajo individual te resulta m??s r??pido y efectivo que el trabajo grupal?</h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="scienceA[4]" id="questionA_7_4" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="scienceA[4]" id="questionA_7_4" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <h3 class="main_question"><strong>95/98</strong>??Dedicar??as parte de tu tiempo a ayudar a personas de zonas carenciadas?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="humanistic[10]" id="question_2_10" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="humanistic[10]" id="question_2_10" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>96/98</strong>??Cuando elijes tu ropa o decoras un ambiente, tienes en cuenta la combinaci??n de los colores, las telas o el estilo de los muebles?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="artistic[10]" id="question_3_10" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="artistic[10]" id="question_3_10" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>97/98</strong>??Te gustar??a trabajar como profesional dirigiendo la construcci??n de una empresa hidroel??ctrica?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="engineering[10]" id="question_4_10" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="engineering[10]" id="question_4_10" value="0" class="icheck required">
                                                    </label>
                                                </div>
                                                <!-- pregunta 3 -->
                                                <h3 class="main_question"><strong>98/98</strong>??Sabes qu?? es el PBI?
                                                </h3>

                                                <div class="form-group radio_questions">
                                                    <label>Si
                                                        <input type="radio" name="administrative[10]" id="question_1_10" value="1" class="icheck required">
                                                </div>
                                                <div class="form-group radio_questions">
                                                    <label>No
                                                        <input type="radio" name="administrative[10]" id="question_1_10" value="0" class="icheck required">
                                                    </label>
                                                </div>

                                            </div><!-- /step 1-->



                                            <div class="submit step">

                                                <h3 class="main_question"><strong>4/4</strong>Por favor complete con sus datos</h3>

                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" name="nombre" class="required form-control" placeholder="Nombre(s)">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="apellido" class="required form-control" placeholder="Apellidos">
                                                        </div>
                                                    </div><!-- /col-sm-6 -->

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" name="correo" class="required form-control" placeholder="Correo Electr??nico">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="numero" class="required form-control" placeholder="WhatsApp">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="colegio" class="required form-control" placeholder="??En que colegio estudiaste?">
                                                        </div>

                                                    </div><!-- /col-sm-6 -->
                                                </div><!-- /row -->

                                                <div class="form-group checkbox_questions">
                                                    <input name="terms" type="checkbox" class="icheck required" value="yes">
                                                    <label>Al solicitar informaci??n acepto que he le??do y estoy de acuerdo con los <a href="https://unifranz.edu.bo/universidad/politica-de-privacidad/" data-toggle="modal" data-target="#terms-txt">T??rminos, pol??ticas y condiciones</a> de Unifranz. ?
                                                    </label>
                                                </div>

                                            </div><!-- /step 4-->

                                        </div><!-- /middle-wizard -->
                                        <div id="bottom-wizard">
                                            <button type="button" name="backward" class="backward">Atras </button>
                                            <button type="button" name="forward" class="forward">Siguiente</button>
                                            <button type="submit" name="process" class="submit">Enviar</button>
                                        </div><!-- /bottom-wizard -->
                                    </form>
                                </div><!-- /Wizard container -->

                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->






                </div><!-- /tab content -->
            </div><!-- /container-fluid -->
        </div><!-- /wrapper_in -->
    </div><!-- /main_container -->

    <div id="additional_links">
        <ul>
            <p>&copy; {{now()->year}} - Unifranz | Innovaci??n en educaci??n</p>
        </ul>
    </div><!-- /add links -->
    <!-- SCRIPTS -->
    <!-- Jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Common script -->
    <script src="assets/js/common_scripts_min.js"></script>
    <!-- Theme script -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/mapmarker.jquery.js"></script>
    <script src="assets/js/mapmarker_func.jquery.js"></script>
    <script>
        $('#home-tab').on('click', function(e) {
            e.preventDefault()
            $('#tabQuiz').click();
        })
    </script>
</body>

</html>
<?php
echo '<pre>';
if (isset($_POST['forward'])) {
    $fila = $_POST['administrative'];

    print_r($fila);
    $sumaAdministrative = array($fila);
    $suma = array_sum($fila);
    echo ($suma);
}
