<html lang="en"><head><style>.jquery-ripples { position: relative; z-index: 0; }</style>
    <!--// Meta Tags //-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Aula Virtual - UNIFRANZ">
    <meta name="author" content="UNIFRANZ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aula Virtual Unifranz</title>
    <!--// Icons //-->
    <link rel="stylesheet" href="/template/fonts/flat_icons/flaticon.css">
    <link rel="stylesheet" href="/template/fonts/font_awesome/css/all.css">
    <!--// Google Fonts //-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
    <!--// FrameWorks //-->
    <link rel="stylesheet" href="/template/css/frameworks.css">
    <!--// Theme Main Js //-->
    <link rel="stylesheet" href="/template/css/style.css">

    <!--Animate CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <!--Popup Lightbox CSS-->
    <link href="/template/css/popup-lightbox.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-161827384-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-161827384-1');
    </script>



<style type="text/css" id="jarallax-clip-0">#jarallax-container-0 {
           clip: rect(0 0px 0px 0);
           clip: rect(0, 0px, 0px, 0);
        }</style></head>

<body data-spy="scroll" data-target="#fixedNavbar" data-offset="0">
    
    
<section class="hero-section" data-scroll-index="0" id="login">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
                <h1 class="intro-hero-title">Unifranz Virtual</h1>
                <form id="form-login" onsubmit="ajax_submit();return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" aria-label="Text input with dropdown button" placeholder="Código estudiante/CI para docentes" class="form-control" value="" name="code" id="code" required=""> 
                            <div class="input-group-append">
                                <button type="button" class="btn btn-success pl-5 pr-5" onclick="ajax_submit();"><span id="login-btn">Ingresar</span></button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error" style="display: none;">
                <strong>Error: </strong> El código es Incorrecto. <br> 
                Código ejemplo: MED1234567
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="page-wrapper" id="home" style="display: none;">

    
    <!-- <div class="img-container" style=" display: none"> -->
      <!-- <img class="popup-1" src="/template/img/popup/comunicado020_2020/page-01.png" alt="https://unifranz.edu.bo/comunicados-oficiales/" /> -->
      <!-- <img src="/template/img/popup/comunicado019_2020/page-02.jpg" alt="https://unifranz.edu.bo/comunicados-oficiales/" /> -->
      <!-- <img src="/template/img/popup/comunicado017_2020/page-03.jpg" alt="https://unifranz.edu.bo/comunicados-oficiales/" /> -->
    <!-- </div> -->    
    <header class="header fixed-top white-navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="https://www.virtual.unifranz.edu.bo">
                <img src="/template/img/bg/logo-transparent.png" alt="Logo" class="img-fluid logo-transparent">
                <img src="/template/img/bg/logo-normal.png" alt="Logo" class="img-fluid logo-normal" style="display: none;">
            </a>
            <!--// .logo //-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="togler-icon-inner">
                <span class="line-1"></span>
                <span class="line-2"></span>
                <span class="line-3"></span>
                </span>
            </button>
            
            
            <!--// Mobile Toggle Btn //-->
            <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                <ul class="navbar-nav">
                                        <li class="nav-item">
                        <a class="nav-link menu-link" href="#" data-scroll-nav="1">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#" data-scroll-nav="2">Plataformas Virtuales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#" data-scroll-nav="3">Tutoriales</a>
                    </li>
                    <li class="nav-item contenidoDocentes">
                        <a target="_blank" class="nav-link menu-link" href="https://bit.ly/2XqtNYe">Plataforma Doc.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="https://www.virtual.unifranz.edu.bo/blog-informativo" data-scroll-nav="4">Preguntas Frecuentes</a>
                    </li>
                                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span id="dialog_title_span">'+dialog_title+'</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                            <a class="dropdown-item" href="#" onclick="logout();">Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--// .navbar-nav //-->
    </div>
    <!--// .container //-->
</header>


    <!--// Hero Section Start //-->
<section class="hero-section" data-scroll-index="1">
    <div class="container">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 col-md-10 col-sm-12">
                <h1 class="hero-section-title wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    ¡Bienvenido al portal de aulas virtuales!
                </h1>
                <p class="hero-section-subtitle wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    En el que encontrarás:<br>
                    -	Links de acceso a las plataformas virtuales<br>
                    -	Videos y Manuales Tutoriales<br>
                    -	Respuesta a las preguntas más frecuentes<br>
                    -	Datos de Contacto por sede <br>
                    -	Chat para obtener ayuda en línea
                </p>
                <a href="https://www.virtual.unifranz.edu.bo/blog-informativo" class="default-outline-btn wow fadeInUp animated" data-wow-delay="0.4s" id="downloadBtn" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Blog Informativo<i class="fa fa-angle-right ml-2"></i></a>
            </div>
            <!--// .col //-->
            <div class="col-lg-6 hero-image text-right wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                <img src="/template/img/bg/hero_image.png" alt="Hero image" class="img-fluid img-jump" style="width: 90%">
            </div>
            <!--// .col //-->
        </div>
        <!--// .row //-->
    </div>
    <!--// .container //-->
    <a href="#" data-scroll-nav="2" class="down-scroll">
        <i class="fa fa-arrow-down"></i>
    </a>
    <!--// .down-scroll //-->
</section>
<!--// Hero Section End  //-->
    <!--// Services Section Start //-->
    <section class="services section-padding" data-scroll-index="2" id="services-area">
        <div class="container">
            <div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">eCampus<br><span>UNIFRANZ</span></h2>
            <div class="services-item item-shadow text-center video-container">
                <iframe src="https://www.youtube.com/embed/jtHetWGNEgY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Conoce nuestro nuevo modelo<br><span>Blended Learning Experience</span></h2>
            <div class="services-item item-shadow text-center video-container">
                <iframe src="https://www.youtube.com/embed/VQs269bLd4g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Cursos de<br><span>Reforzamiento</span></h2>
            <div class="services-item item-shadow text-center video-container">
                <iframe src="https://www.youtube.com/embed/DJB8_qs1cvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Segundo Turno<br><span>I / 2020</span></h2>
            <div class="services-item item-shadow text-center video-container">
                <iframe src="https://www.youtube.com/embed/3RcWtNaVl5k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Solicitud  de<br><span>Documentos</span></h2>
            <div class="services-item item-shadow text-center video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0AJAIL0AnYc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Actualización de  <br><span>Datos</span></h2>
            <div class="services-item item-shadow text-center video-container">
                <iframe src="https://www.youtube.com/embed/jvzTgAj2P0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center contenidoDocentes">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Guía para docentes <br><span>Google Drive</span></h2>
            <div class="services-item item-shadow text-center">
                <div class="services-icon">
                    <img src="/template/img/bg/drive.png" alt="">  
                </div>
                <div class="services-body">
                </div>
                <a target="_blank" href="https://drive.google.com/drive/u/1/folders/1GZ3TxQJMS-zOB_C5WMTRfA_wBc22baYO" class="services-link text-capitalize">Ir ahora<i class="fa fa-link ml-2"></i></a>
            </div>
        </div>
    </div>
</div>            
            <div class="row justify-content-center contenidoDocentes">
    <div class="col-lg-9">
        <div class="section-heading">
            <h2 class="section-title">COMUNICADO <br><span>A la comunidad Docente</span></h2>
            <div class="services-item item-shadow text-center">
                
                <div class="services-body">
                    <p>
                        Ante el cambio de paradigma que estamos viviendo, queremos compartir con Uds. material sobre la gestión de clases en el proceso de enseñanza - aprendizaje. 
                        En el repositorio UNIFRANZ "Recursos para el aprendizaje en línea" encontrarás una serie de recursos educativos, buenas prácticas y lecturas útiles que te apoyarán en tu asignatura y en desarrollar las competencias docentes para una eficiente facilitación del aprendizaje.<br>
                        <br>
                        <b>Jueves 9 de abril de 2020</b>
                        <br>
                        <br>
                        Pueden acceder con el código QR o el enlace:
                    </p>
                    <img src="/template/img/bg/qr.png" alt="qr.png">  
                </div>
                <a target="_blank" href="https://bit.ly/2XqtNYe" class="services-link text-capitalize">Ir ahora<i class="fa fa-link ml-2"></i></a>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center contenidoDocentes">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Guía para docentes<br><span>Youtube Live</span></h2>
            <div class="services-item item-shadow text-center video-container">
                <iframe src="https://www.youtube.com/embed/g-pPbxpr-dk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
            <div class="services-body  pt-3">
            </div>
            <a href="https://www.virtual.unifranz.edu.bo/pdfYoutubeLive" class="services-link text-capitalize">Descargar guía<i class="fa fa-download ml-2"></i></a>
        </div>
    </div>
</div>            
            <div class="row justify-content-center contenidoDocentes">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Guía para docentes<br><span>Hangouts Meet</span></h2>
            <div class="services-item item-shadow text-center video-container">
                <iframe src="https://www.youtube.com/embed/b3BfE8_gpFI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
            <div class="services-body  pt-3">
            </div>
            <a href="https://www.virtual.unifranz.edu.bo/pdfHangoutsMeet" class="services-link text-capitalize">Descargar guía<i class="fa fa-download ml-2"></i></a>
        </div>
    </div>
</div>            
            <div class="row justify-content-center contenidoDocentes">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Guía para docentes <br><span>Zoom</span></h2>
            <div class="services-item item-shadow text-center">
                <div class="services-icon">
                    <img src="/template/img/bg/04.png" alt="">  
                </div>
                <div class="services-body">
                </div>
                <a target="_blank" href="https://spark.adobe.com/page/RV7z511s6f0uT/" class="services-link text-capitalize">Ir ahora<i class="fa fa-link ml-2"></i></a>
            </div>
        </div>
    </div>
</div>
            <div class="row justify-content-center contenidoEstudiantes">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Ver mis accesos a las <br><span>Aulas Virtuales</span></h2>
            <div class="services-item item-shadow text-center">
                <div class="services-icon">
                    <img src="/template/img/bg/user.png" alt="">  
                </div>
                <div class="services-body">
                    <h5 id="titleSede"></h5>
                </div>
                <a id="linkCodigo" target="_blank" href="" class="services-link text-capitalize">Ir ahora<i class="fa fa-link ml-2"></i></a>
            </div>
        </div>
    </div>
</div>            
            <div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-heading">
            <h2 class="section-title">Plataformas <br><span>Virtuales</span></h2>
            <p class="section-sub-title">
                Por favor, haga “click” en el ícono de la plataforma virtual a la que desea ingresar.
            </p>
        </div>
    </div>
</div>

<div class="row align-items-center justify-content-center">
    <div class="col-lg-3 col-md-6 col-sm-12  col-12 services-resp-margin wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="services-item item-shadow text-center">
            <div class="services-icon">
                <img src="/template/img/bg/02.png" alt="">  
            </div>
            <div class="services-body">
                <h5>Classroom</h5>
            </div>
            <a target="_blank" href="https://classroom.google.com/u/0/" class="services-link text-capitalize">Ingresar<i class="fa fa-angle-right ml-2"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12  col-12 services-resp-margin wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="services-item item-shadow text-center">
            <div class="services-icon">
                <img src="/template/img/bg/03.png" alt="">
            </div>
            <div class="services-body">
                <h5>Schoology</h5>
            </div>
            <a target="_blank" href="https://app.schoology.com/register.php?type=student" class="services-link text-capitalize">Ingresar<i class="fa fa-angle-right ml-2"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12  col-12 services-resp-margin wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="services-item item-shadow text-center">
            <div class="services-icon">
                <img src="/template/img/bg/01.png" alt="">
            </div>
            <div class="services-body">
                <h5>Moodle</h5>
            </div>
            <a target="_blank" href="https://moodle.unifranz.edu.bo/login/index.php" class="services-link text-capitalize">Ingresar<i class="fa fa-angle-right ml-2"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12  col-12 services-resp-margin wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="services-item item-shadow text-center">
            <div class="services-icon">
                <img src="/template/img/bg/04.png" alt="">
            </div>
            <div class="services-body">
                <h5>Zoom</h5>
            </div>
            <a target="_blank" href="https://zoom.us/join" class="services-link text-capitalize">Ingresar<i class="fa fa-angle-right ml-2"></i></a>
        </div>
    </div>
</div>
        </div>
    </section>
    <!--// Services Section End //-->

    <section id="how-it-works" data-scroll-index="3" class="how-it-works-section jarallax bg-gradient-green section-padding" data-jarallax="" data-speed="0.3s" style="z-index: 0;">
    
    <div class="container">
        <!--// .row //-->
        <div class="row justify-content-center align-items-center how-it-work-wrap">
            <div class="col-lg-7 col-md-10 col-sm-12">
                <div class="how-it-works-inner text-center">
                    <h3 class="text-white">Tutoriales</h3>
                    <p>En esta sección encontrarás videos y manuales ilustrativos que te guiarán paso a paso el ingreso a tu Aula Virtual.</p>
                    <!-- <div class="how-it-work-video">
                        <img src="/template/img/bg/how-it-work-image.png" alt="How it work image" class="img-fluid">
                    </div> -->
                </div>
            </div>
            <!--// .col //-->
        </div>
        <!--// .row //-->
        <div class="how-it-work-process">
            <div class="row text-center" style="padding-bottom: 70px;">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 how-it-work-item">
                    <div class="how-it-work-number">
                        <a class="pdfDocente" target="_blank" href="https://youtu.be/-4RWmSYQV1g"><span><i class="mdi mdi-play"></i></span></a>
                        <a class="pdfEstudiante" target="_blank" href="https://youtu.be/rtiEy0XqRVU"><span><i class="mdi mdi-play"></i></span></a>
                    </div>
                    <h6>Classroom</h6>
                    <div class="how-it-work-text">
                        <p>¿Descargar manual de uso?</p>
                        <a class="pdfDocente" href="https://www.virtual.unifranz.edu.bo/pdfDocenteClassRoom">Manual-classroom-docente.pdf</a>
                        <a class="pdfEstudiante" href="https://www.virtual.unifranz.edu.bo/pdfEstudianteClassRoom">Manual-classroom-estud.pdf</a>
                    </div>
                </div>
                <!--// .col //-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 how-it-work-item">
                    <div class="how-it-work-number">
                        <a class="pdfDocente" target="_blank" href="https://view.genial.ly/5aefa9c12eeaaa4e9cad8b83 "><span><i class="mdi mdi-play"></i></span></a>
                        <a class="pdfEstudiante" target="_blank" href="https://youtu.be/NMInEmZnPfk"><span><i class="mdi mdi-play"></i></span></a>
                    </div>
                    <h6>Schoology</h6>
                    <div class="how-it-work-text">
                        <p>¿Descargar manual de uso?</p>
                        <a class="pdfDocente" href="https://www.virtual.unifranz.edu.bo/pdfDocenteSchoology">Manual-schoology-docente.pdf</a>
                        <a class="pdfEstudiante" href="https://www.virtual.unifranz.edu.bo/pdfEstudianteSchoology">Manual-schoology-estud.pdf</a>
                    </div>
                </div>
                <!--// .col //-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 how-it-work-item">
                    <div class="how-it-work-number">
                        <a class="pdfDocente" target="_blank" href="https://view.genial.ly/5e6bd70d3ac7780fd54d34a2 "><span><i class="mdi mdi-play"></i></span></a>
                        <a class="pdfEstudiante" target="_blank" href="https://youtu.be/DoEZEX8l5Jg"><span><i class="mdi mdi-play"></i></span></a>
                    </div>
                    <h6>Moodle</h6>
                    <div class="how-it-work-text">
                        <p>¿Descargar manual de uso?</p>
                        <a class="pdfDocente" href="https://www.virtual.unifranz.edu.bo/pdfDocenteMoodle">Manual-moodle-docente.pdf</a>
                        <a class="pdfEstudiante" href="https://www.virtual.unifranz.edu.bo/pdfEstudianteMoodle">Manual-moodle-estud.pdf</a>
                    </div>
                </div>
                <!--// .col //-->
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 how-it-work-item">
                    <div class="how-it-work-number">
                        <a target="_blank" href="https://youtu.be/ZrMVjTDg5XM"><span><i class="mdi mdi-play"></i></span></a>
                    </div>
                    <h6>Zoom</h6>
                    <p>¿Descargar manual de uso?</p>
                    <a class="pdfDocente" href="https://www.virtual.unifranz.edu.bo/pdfDocenteZoom">Manual-zoom-docente.pdf</a>
                    <a class="pdfEstudiante" href="https://www.virtual.unifranz.edu.bo/pdfEstudianteZoom">Manual-zoom-estud.pdf</a>
                </div>
                <!--// .col //-->
            </div>
            <!--// .row //-->
        </div>
    </div>
    <!--// .container //-->
<div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;"><div class="jarallax-img how-it-works-bg" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 0px; height: 518px; overflow: hidden; pointer-events: none; margin-top: 111px; transform: translate3d(0px, -111px, 0px);"></div></div></section>    
    <!--// FAQ Section Start //-->
    <section class="faq" data-scroll-index="4">
        <div class="container">
            <div class="faq-content-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="faq-inner-wrap">
                            <div class="section-heading">
                                <h2 class="section-title">Preguntas <br><span>Frecuentes</span></h2>
                                <p class="section-sub-title">
                                    Si no encuentra su pregunta, comuníquese con nosotros.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--// .col //-->
                    <div class="col-lg-12">
                        <div class="accordion" id="faq-tab-accordion">
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-1" aria-expanded="false" aria-controls="faq-tab-1" id="faq-tab-1-header">
                                    <h6><span class="accordion-card-number">01</span>¿Qué pasa el 1er día de clases? ¿Qué tengo que hacer?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-1" class="collapse" aria-labelledby="faq-tab-1-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Comienza tu semestre realizando las siguientes actividades:
                                            </p><ul style="list-style-type: disc; margin-left: 30px !important;">
                                                <li>Te recordamos que esta semana tiene el propósito de que te familiarices con todos los elementos necesarios para que puedas desarrollar tu semestre sin ningún inconveniente.</li>
                                                <li>A lo largo de la primera semana de clases deberás participar de dos capacitaciones:</li>
                                            </ul>
                                            <ul style="list-style-type: upper-roman; margin-left: 60px !important;">
                                                <li>Uso de la plataforma, desarrollo de competencias digitales, políticas de aprendizaje y normas de bioseguridad. De acuerdo al cronograma establecido elige el horario que más te convenga y participa de ella. 
                                            Podrás ver los horarios disponibles en el Facebook, el portal estudiantil, pero también te los comunicará tu Director de Carrera por los canales de contacto que tienes con él.</li>
                                                <li>Modelo de aprendizaje basado en Competencias y modalidad Blended Learning Experience (BLX). Tu Director de Carrera te comunicará la fecha y hora en la que se realizará.
                                            Debes estar atento a los canales de comunicación que tienes con tu Director de Carrera.</li>
                                            </ul>
                                            <strong>Lo que necesitas saber </strong>
                                            <ul style="list-style-type: disc; margin-left: 30px !important;">
                                                <li>Ingresa al portal estudiantil (<a href="https://miportal.unifranz.edu.bo" target="_blank" style="color:#ff5100"><u>https://miportal.unifranz.edu.bo</u></a>), familiarízate con los horarios de tus asignaturas y conoce a tus docentes. 
                                                    <br>Puedes ver como ingresar al Portal Estudiantil en este video  <a href="https://youtu.be/9ncBYegnyRA" target="_blank" style="color:#ff5100"><u>https://youtu.be/9ncBYegnyRA</u></a>
                                                    <br>Así puedes ver tus horarios <a href="https://youtu.be/ODmc1OdWiAc" target="_blank" style="color:#ff5100"><u>https://youtu.be/ODmc1OdWiAc</u></a>
                                                </li>
                                                <li>Ingresa a tu cuenta de la plataforma Moodle (LMS) y familiarízate con el entorno y con tus asignaturas.
                                                    <br>Para ingresar a la plataforma necesitarás tu correo institucional. Lo podrás encontrar de la siguiente manera <a href="https://youtu.be/9ncBYegnyRA" target="_blank" style="color:#ff5100"><u>https://youtu.be/9ncBYegnyRA</u></a>
                                                    <br>Ahora puedes ingresar a la plataforma siguiendo estos pasos <a href="https://youtu.be/9ncBYegnyRA" target="_blank" style="color:#ff5100"><u>https://youtu.be/9ncBYegnyRA</u></a>
                                                    <br>Tu salud y la de tu familia son importantes para nosotros, por lo que hemos habilitado canales de comunicación que te permitirán solucionar dudas y consultas sin necesidad de ir a la universidad. 
                                                </li>
                                                <li>Si necesitas Soporte Técnico o comunicarte con Servicios Estudiantiles, puedes hacerlo por WhatsApp a través de este número <a href="https://api.whatsapp.com/send?phone=59171502211&amp;text=Hola%2C%20tengo%20una%20consulta" target="_blank" style="color:#ff5100"><u>71502211</u></a>.</li>
                                                <li>Si necesitas contactarte con tu Director de Carrera, puedes hacerlo de forma virtual a través de la plataforma de Directores Online de la siguiente manera: <a href="https://youtu.be/9ncBYegnyRA" target="_blank" style="color:#ff5100"><u>https://youtu.be/9ncBYegnyRA</u></a></li>
                                            </ul>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-2" aria-expanded="false" aria-controls="faq-tab-2" id="faq-tab-2-header">
                                    <h6><span class="accordion-card-number">02</span>¿Qué tengo que hacer en Plataforma?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-2" class="collapse" aria-labelledby="faq-tab-2-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Lo primero que debes hacer es explorarla para familiarizarte con ella, ingresa a cada una de tus asignaturas y descarga los <strong>Planes Globales de Formación</strong>. Dentro de la plataforma (LMS), encontrarás de forma organizada la planificación de todo el semestre para cada una de tus asignaturas. Luego revisa los contenidos, recursos, actividades y finalmente programa tus tiempos de acuerdo con el calendario de la plataforma. 
                                            <br><br>También encontrarás materiales y recursos que reforzarán tu proceso de aprendizaje. Asimismo, encontrarás las instrucciones para las actividades que tu docente haya planificado, además de las evidencias de aprendizaje que deben ser generadas en cada hito.
                                            <br><br>¡No te preocupes! tus docentes te irán guiando en el proceso. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-3" aria-expanded="false" aria-controls="faq-tab-3" id="faq-tab-3-header">
                                    <h6><span class="accordion-card-number">03</span>¿Cómo accedo a mis asignaturas?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-3" class="collapse" aria-labelledby="faq-tab-3-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Cuando ingreses a la plataforma Moodle (LMS), debes dirigirte a la opción "Inicio del Sitio" o "Área Personal", ahí encontrarás todas las asignaturas a las que te inscribiste. 
                                            <br>Verifica que se encuentran todas las materias que has asignado para el semestre, en caso de que necesites ayuda o tengas alguna pregunta comunícate con Soporte Técnico, puedes hacerlo por WhatsApp a través de este número <a href="https://api.whatsapp.com/send?phone=59171502211&amp;text=Hola%2C%20tengo%20una%20consulta" target="_blank" style="color:#ff5100"><u>71502211</u></a>.  
                                        </p>
                                        <div class="feature-image-wrap" data-wow-delay="0.8s" style="margin-top:10px">
                                            <img src="https://bx.unifranz.edu.bo/asignaturas/01.jpg" alt="About image" class="img-fluid img-jump">
                                            <br><br><br>
                                            <img src="https://bx.unifranz.edu.bo/asignaturas/02.jpg" alt="About image" class="img-fluid img-jump">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-4" aria-expanded="false" aria-controls="faq-tab-4" id="faq-tab-4-header">
                                    <h6><span class="accordion-card-number">04</span>¿Cómo funciona la modalidad BLX?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-4" class="collapse" aria-labelledby="faq-tab-4-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            El BLX es una modalidad de aprendizaje que combina lo mejor de la experiencia virtual con la experiencia presencial, usando la tecnología. En UNIFRANZ aprendes a través de aulas virtuales donde encontrarás recursos y actividades de aprendizaje, formas de comunicarte con tu docente y foros donde podrás compartir experiencias y consultas. 
                                            <br><br>El aprendizaje presencial busca que desarrolles la competencia de aprender haciendo por lo que está pensada para que realices las prácticas de tus asignaturas en los ambientes, laboratorios y anfiteatros de la universidad. 
                                            <br><br>Algo muy importante, que debes tomar en cuenta en esta modalidad, porque nos interesa que aprendas a aprender es:
                                            </p><ul style="list-style-type: disc; margin-left: 30px !important;">
                                                <li>Tú eres el principal responsable y protagonista de tus aprendizajes, debes estudiar y presentar tus trabajos en los tiempos establecidos por el docente.</li>
                                                <li>Planifica tus tiempos de estudio, porque el aula virtual está a tu alcance 24/7 (actividades asincrónicas).</li>
                                                <li>Las sesiones sincrónicas (sesiones de Zoom) las usas para preguntar, aclarar y hacer consultas al docente. Al tratarse de encuentros en tiempo real, donde se tratan aspectos significativos de la asignatura, es muy importante que te conectes y participes activamente.</li>
                                                <li>Las evaluaciones van dirigidas a que apliques en situaciones prácticas lo que has aprendido en la teoría.</li>
                                                <li>Los docentes son tus mentores para que logres aprendizajes significativos que te servirán en tu futuro profesional.</li>
                                            </ul>
                                            Mientras no tengamos la autorización de las autoridades competentes para reiniciar actividades de forma presencial, te aseguramos que las actividades de aprendizaje propuestas serán desarrolladas de manera virtual utilizando FabLabs, Simuladores y recursos digitales seleccionados, que garantizan el desarrollo de tus competencias.
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-5" aria-expanded="false" aria-controls="faq-tab-5" id="faq-tab-5-header">
                                    <h6><span class="accordion-card-number">05</span>¿Qué son las actividades Sincrónicas?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-5" class="collapse" aria-labelledby="faq-tab-5-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Las actividades sincrónicas comprenden la interacción en espacio y tiempo real, pueden ser mediante la plataforma Zoom o de manera presencial, para actividades prácticas cuando las condiciones de la pandemia lo permitan.
                                            <br><br>En el calendario propuesto por el docente en el aula virtual, encontrarás las fechas y horas planificadas para los encuentros en tiempo real.
                                            <br><br>Debes marcar tu asistencia a todas las sesiones sincrónicas programadas por el docente.
                                            <br><br>¡No te preocupes! Tus docentes te explicarán cómo marcar tu asistencia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-6" aria-expanded="false" aria-controls="faq-tab-6" id="faq-tab-6-header">
                                    <h6><span class="accordion-card-number">06</span>¿Qué son las actividades Asincrónicas?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-6" class="collapse" aria-labelledby="faq-tab-6-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Las actividades asincrónicas son aquellas que desarrollas en la plataforma Moodle (LMS) como tareas individuales o colaborativas (investigaciones, proyectos, revisión de material, lecturas, ejercicios prácticos, resolución de casos, etc.), también comprende tu participación en los foros.
                                            <br><br>Recuerda siempre marcar las actividades realizadas en la plataforma Moodle (LMS), así sabremos que estás participando activamente en tus asignaturas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-7" aria-expanded="false" aria-controls="faq-tab-7" id="faq-tab-7-header">
                                    <h6><span class="accordion-card-number">07</span>¿Cuándo es mi 1ra clase sincrónica?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-7" class="collapse" aria-labelledby="faq-tab-7-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Para saber cuándo es mi 1ra clase sincrónica tengo que ingresar al aula virtual de mi asignatura, leer las indicaciones del docente donde especifica la fecha y comparte el enlace para acceder a dicha clase.
                                            <br><br>Revisa el calendario de la plataforma e identifica la primera actividad programada por el docente.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-8" aria-expanded="false" aria-controls="faq-tab-8" id="faq-tab-8-header">
                                    <h6><span class="accordion-card-number">08</span>¿Cómo funcionan los horarios?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-8" class="collapse" aria-labelledby="faq-tab-8-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Tus horarios combinan actividades sincrónicas y asincrónicas, eso significa que tu horario de clase establecido comprende períodos de sesiones Zoom y períodos que debes dedicar a desarrollar y entregar actividades en la plataforma Moodle (LMS). Para saber a detalle la planificación de los encuentros sincrónicos y las actividades asincrónicas, revisa el calendario de tu asignatura.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card faq-item">
                                <a class="card-header d-flex align-items-center justify-content-between collapsed" href="#0" data-toggle="collapse" data-target="#faq-tab-9" aria-expanded="false" aria-controls="faq-tab-9" id="faq-tab-9-header">
                                    <h6><span class="accordion-card-number">09</span>¿Cómo contacto a mi docente?</h6>
                                    <span class="card-toggle-btn"></span>
                                </a>
                                <div id="faq-tab-9" class="collapse" aria-labelledby="faq-tab-9-header" data-parent="#faq-tab-accordion" style="">
                                    <div class="card-body">
                                        <p>
                                            Para contactar a tu docente, ubica el ícono de <i class=" fa fa-comment"></i> mensajería en la parte superior derecha de tu aula virtual, haz Click en ella y en la barra de búsqueda escribe el nombre de tu docente, al dar Click en su nombre se abre la barra para redactar el mensaje, escribes el mensaje y al terminar haz Click en enviar <i class=" fa fa-paper-plane"></i>. 
                                            </p><div class="feature-image-wrap" data-wow-delay="0.8s" style="margin-top:10px">
                                                <img src="https://bx.unifranz.edu.bo/contacto-docente/01.jpg" alt="About image" class="img-fluid img-jump">
                                            </div>
                                            El canal de comunicación oficial para la asignatura es el aula virtual.
                                            <br><br>Si el docente está de acuerdo te proporcionará su número de celular o creará un grupo en alguna red social para la asignatura.
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            
                            <!--// .faq-item //-->
                        </div>
                    </div>
                    <!--// .col //-->
                </div>
                <!--// .row //-->
            </div>
        </div>
        <!--// .container //-->
    </section>
    <!--// FAQ Section End //-->
</div>

<!--// Footer Section Start //-->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="footer-widget col-lg-9 col-md-6 col-sm-6">
                        <div class="footer-box">
                            <h5 class="footer-title">Contactos</h5>
                            <!-- <p>Escríbenos por WhatsApp al:</p> -->
                            <ul class="contact-info-footer">
                                <li>Escríbenos por WhatsApp al: <a href="https://api.whatsapp.com/send?phone=59171502211&amp;text=Hola%2C%20tengo%20una%20consulta" target="_blank" style="color:#ff5100">71502211</a></li>
                                <!-- <li><i class="mdi mdi-phone"></i>La Paz: 67001006</li>
                                <li><i class="mdi mdi-phone"></i>El Alto: 67001007</li>
                                <li><i class="mdi mdi-phone"></i>Santa Cruz: 72049306</li> -->
                            </ul>
                            <div class="footer-social-links">
                                <a href="https://www.facebook.com/unifranz.edu/" target="_blank"><i class="mdi mdi-facebook"></i></a>
                                <a href="https://twitter.com/unifranzbolivia" target="_blank"><i class="mdi mdi-twitter"></i></a>
                                <a href="https://www.linkedin.com/school/universidad-franz-tamayo/" target="_blank"><i class="mdi mdi-linkedin"></i></a>
                                <a href="https://www.instagram.com/unifranz/" target="_blank"><i class="mdi mdi-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCbYlXAaRyHl1EJ5r-STX08A" target="_blank"><i class="mdi mdi-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--// .col //-->
                    <div class="footer-widget col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-box">
                            <h5 class="footer-title">Accesos directos</h5>
                            <ul class="footer-links">
                                <li>
                                    <a href="#0" data-scroll-nav="1">Inicio</a>
                                </li>
                                <li>
                                    <a href="https://www.virtual.unifranz.edu.bo/pagos-online">Pagos Online</a>
                                </li>
                                <li>
                                    <a href="#0" data-scroll-nav="2">Plataformas Virtuales</a>
                                </li>
                                <li>
                                    <a href="#0" data-scroll-nav="3">Tutoriales</a>
                                </li>
                                <li>
                                    <a href="#0" data-scroll-nav="4">Preguntas Frecuentes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .row -->
            </div>
            <!--// .container //-->
        </div>
        <!--// .footer-top //-->
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9">
                        <p class="text-center">© Copyright <span id="fullYearCopyright">2022</span> UNIFRANZ - Aula Virtual</p>
                    </div>
                </div>
                <!--// .row //-->
            </div>
            <!--// .container //-->
        </div>
        <!--// .copyright //-->
</footer>

<!--// Scroll Top //-->
<div class="preloader-wrap" style="display: none;">
<div class="preloader-inner" style="display: none;">
    <div class="sk-circle"></div>
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
</div>

<div id="fb-root"></div>

<div class="fb-customerchat" id="customFacebook" greeting_dialog_display="hide" attribution="setup_tool" page_id="101316901512462" theme_color="#3b5998" logged_in_greeting="Hola, cómo podemos ayudarte?" logged_out_greeting="Hola, cómo podemos ayudarte?">
</div> 
<!--// jQuery v3.4.1 //-->
    <script src="/template/js/jquery.js"></script>
    <!--// Plugins Js //-->
    <script src="/template/js/plugins.js"></script>
    <!--// Main Js //-->
    <script src="/template/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="/js/login.js"></script>

    <!--Popup Lightbox Js-->
    <script src="/js/jquery.popup.lightbox.js"></script>





</body></html>