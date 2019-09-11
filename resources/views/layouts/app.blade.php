<!DOCTYPE html>
<html>
<head>
    <title>Impacto Evangelístico</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Project SEO-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
</head>

<body class="bg_black">

<!-- MENU -->
<header>
    <nav class="navbar mg-0" id="navbar">
        <div class="navbar-header">
            <button id="nav-toggle" type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                <i class="icon">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </i>
            </button>
            <!-- Buttom mobile -->
            <div class="header-principal">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4 col-xs-offset-2 col-xs-8 text-center">
                            <div class="language">
                                <span><a href="index.html">ESPAÑOL</a></span>
                                <span><a href="index-en.html">English</a></span>
                                <span><a href="index-pt.html">Português</a></span>
                            </div>
                            <a href="/" id="logo_menu" class="pd-0">
                                <img src="imagenes/impacto_evangelistico.png">
                            </a>
                        </div>
                        <li class="share hidden-lg hidden-md hidden-sm">
                            <span><a class="pd-0"><i class="icon-search"></i></a></span>
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <!-- links menu -->
        <div class="collapse navbar-collapse pd-0" id="menu">
            <ul class="nav navbar-nav text-center mg-0">
                <li><a class="pd-0" href="/noticias">NOTICIAS</a></li>
                <li><a class="pd-0" href="/especial">ESPECIAL</a></li>
                <li><a class="pd-0" href="/musica">MÚSICA</a></li>
                <li><a class="pd-0" href="/literatura">LITERATURA</a></li>
                <li><a class="pd-0" href="/heroes">HÉROES DE LA FE</a></li>
                <li class="btn_"><span><a href="/suscribete" >SUSCRÍBETE</a></span></li>

                <li class="redes-ft">
                    <span><a class="pd-0" href=""><i class="icon-facebook"></i></a></span>
                    <span><a class="pd-0" href=""><i class="icon-tweet"></i></a></span>
                    <span><a class="pd-0" href=""><i class="icon-instagram"></i></a></span>
                </li>
                <li class="share">
                    <span><a class="pd-0 hidden-xs"><i class="icon-search"></i></a></span>
                </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')

<!-- FOOTER -->
<footer>
    <div class="ng-container">
        <div class="row col-eq">
            <div class="col-xs-12 col-sm-2 col-md-3 col-sm-offset-1 col-md-offset-1 ">
                <div class="img_impacto">
                    <img src="imagenes/impacto_evangelistico.png">
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-2">
                <div class="box_ft_">
                    <h4>INFORMACIÓN</h4>
                    <p><a href="">Nosotros</a></p>
                    <p><a href="">Historia</a></p>
                    <h4>AYUDA</h4>
                    <p><a href="">Preguntas frecuentes</a> </p>
                    <p><a href="">Contacto</a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-2">
                <div class="box_ft_">
                    <h4>CONTENIDO</h4>
                    <p><a href="">Noticias </a></p>
                    <p><a href="">Especiales </a></p>
                    <p><a href="">Música </a></p>
                    <p><a href="">Literatura </a></p>
                    <p><a href="">Héroes de la fe </a></p>
                    <p><a href="">Historias de vida </a></p>
                    <p><a href="">Devocional </a></p>
                    <p><a href="">Eventos </a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2">
                <div class="box_ft_">
                    <h4>SÍGUENOS</h4>
                    <div class="redes-ft">
                        <span><a class="pd-0" href=""><i class="icon-facebook"></i></a></span>
                        <span><a class="pd-0" href=""><i class="icon-tweet"></i></a></span>
                        <span><a class="pd-0" href=""><i class="icon-instagram"></i></a></span>
                    </div>
                    <h4>Para más novedades</h4>
                    <div class="btn_ btn_2">
                        <span><a href="" >SUSCRÍBETE</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ mix('js/app.js')}}"></script>
</body>
</html>

