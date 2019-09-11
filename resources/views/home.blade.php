@extends('layouts.app')


@section('content')
<!-- BUSCADOR -->
<section id="busc_" class="active_none">
    <div class="page-search-form">
        <div class="ng-container">
            <div class="buscador-form" id="searching">
                <button id="btnBusc" type="submit">
                    <span class="icon-search"></span>
                </button>
                <span >
                  <input class="seeker-text" type="text" name="id3" required="" value="" maxlength="150" placeholder="Búsqueda rápida">
                </span>
            </div>
        </div>
    </div>
</section>

<!-- PORTADA SLIDER -->
<section id="portada_slider">
    <div class="ng-container">
        <div class="slider">
            <!-- new post -->
            <div class="box_wrapper">
                <a href="noticia-foto.html">
                    <figure class="imgDsktp hidden-xs">
                        <img src="imagenes/portada_1.jpg">
                    </figure>

                    <figure class="imgMbl hidden-sm hidden-md hidden-lg">
                        <img src="imagenes/img_4.jpg">
                    </figure>

                    <div class="col-md-offset-3 col-md-6 pd-0">
                        <div class="box_text_pt ">
                            <h1>¡Hoy somos más de 194 países orando por ti, Venezuela!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- new post -->
            <div class="box_wrapper">
                <a href="">
                    <figure class="imgDsktp hidden-xs">
                        <img src="imagenes/portada_2.jpg">
                    </figure>

                    <figure class="imgMbl hidden-sm hidden-md hidden-lg">
                        <img src="imagenes/img_3.jpg">
                    </figure>

                    <div class="col-md-offset-3 col-md-6 pd-0">
                        <div class="box_text_pt ">
                            <h1>¡Hoy somos 194 países orando por ti, venezuela!</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ÚLTIMAS NOTICIAS -->
<section id="two_publi">
    <div class="ng-container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <article>
                    <figure>
                        <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/img_1.jpg"></a>
                    </figure>
                    <div class="category">
                        <span><a href="">NOTICIAS</a></span>
                    </div>
                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                        <div class="text">
                            <h1>Más de 20 mil se reunieron en Colombia para adorar a Dios</h1>
                            <p>Lorem ipsum dolor sit amet,consectetur caesares adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </a>
                </article>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <article>
                    <figure>
                        <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/img_2.jpg"></a>
                    </figure>
                    <div class="category">
                        <span><a href="">LIERATURA</a></span>
                    </div>
                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                        <div class="text">
                            <h1>Más de 20 mil se reunieron en Colombia para adorar a Dios</h1>
                            <p>Lorem ipsum dolor sit amet,consectetur caesares adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </a>
                </article>
            </div>

            <!-- publicity -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-sm-push-6 col-md-push-0">
                <article>
                    <figure>
                        <a href=""><img src="imagenes/publicidad_.jpg"></a>
                    </figure>
                </article>
            </div>

            <!-- note extra -->
            <div class="hidden-xs hidden-md hidden-lg col-sm-6 col-sm-pull-6">
                <article>
                    <figure>
                        <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/img_4.jpg"></a>
                    </figure>
                    <div class="category">
                        <span><a href="">LIERATURA</a></span>
                    </div>
                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                        <div class="text">
                            <h1>Más de 20 mil se reunieron en Colombia para adorar a Dios</h1>
                            <p>Lorem ipsum dolor sit amet,consectetur caesares adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- LO MÁS VISTO -->
<section id="more_view">
    <div class="ng-container">
        <h2>LO MÁS VISTO</h2>
        <div class="cont row">
            <div class="col-sm-8">
                <!-- article-->
                <article class="article pos-0">
                    <figure class="thumb">
                        <a href="" title="">
                            <img src="imagenes/img_3.jpg">
                        </a>
                    </figure>

                    <a href="">
                        <div class="txt">
                            <p>01</p>
                            <h3 class="title">Pueblo palestino rechaza embajada de Estados Unidos en jerusalén</h3>
                        </div>
                    </a>
                </article>
            </div>
            <div class="col-sm-4">

                <!-- article-->
                <article class="article pos-1 col-md-12 pd-0">
                    <figure class="thumb">
                        <a href="" title="">
                            <img src="imagenes/img_5.jpg">
                        </a>
                    </figure>

                    <a href="">
                        <div class="txt2">
                            <p>02</p>
                            <h3 class="title">La ciencia confirma la existencia de Dios</h3>
                        </div>
                    </a>
                </article>

                <!-- article-->
                <article class="article pos-2 col-md-12 pd-0">
                    <figure class="thumb">
                        <a href="" title="">
                            <img src="imagenes/img_6.jpg">
                        </a>
                    </figure>

                    <a href="">
                        <div class="txt2">
                            <p>03</p>
                            <h3 class="title">Un hombre con la fe de acero que salvo a más de 4000 personasa</h3>
                        </div>
                    </a>
                </article>

            </div>
        </div>
    </div>
</section>

<!-- HISTORIAS DE VIDA -->
<section id="live_story">
    <div class="ng-container">
        <h2>HISTORIAS DE VIDA</h2>
        <ul class="slider_3items">
            <li class="box_wrapper">
                <article class="article">
                    <figure>
                        <a href="testimonio.html"><img src="imagenes/live_story.jpg"></a>
                    </figure>
                    <a href="testimonio.html">
                        <div class="ws">
                            <div class="txt3">
                                <h3 class="title">La fe venció la muerte</h3>
                                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </a>
                </article>
                </a>
            </li>
            <li class="box_wrapper">
                <article>
                    <figure>
                        <a href="testimonio.html"><img src="imagenes/live_story2.jpg"></a>
                    </figure>

                    <a href="testimonio.html">
                        <div class="ws">
                            <div class="txt3">
                                <h3 class="title">La fe venció la muerte</h3>
                                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </a>
                </article>
            </li>
            <li class="box_wrapper">
                <article>
                    <figure>
                        <a href="testimonio.html"><img src="imagenes/live_story3.jpg"></a>
                    </figure>

                    <a href="testimonio.html">
                        <div class="ws">
                            <div class="txt3">
                                <h3 class="title">La fe venció la muerte</h3>
                                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </a>
                </article>
            </li>
            <li class="box_wrapper">
                <article>
                    <figure>
                        <a href="testimonio.html"><img src="imagenes/live_story4.jpg"></a>
                    </figure>

                    <a href="testimonio.html">
                        <div class="ws">
                            <div class="txt3">
                                <h3 class="title">La fe venció la muerte</h3>
                                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </a>
                </article>
            </li>
        </ul>
    </div>
</section>

<!-- EDITORIAL Y EVENTOS -->
<section id="edit">
    <div class="ng-container">
        <h2>EDITORIAL Y EVENTOS</h2>
        <div class="slider">
            <!-- new post -->
            <div class="box_wrapper">
                <a href="">
                    <figure class="imgDsktp hidden-xs">
                        <img src="imagenes/edit_dsktp.jpg">
                    </figure>

                    <figure class="imgMbl hidden-sm hidden-md hidden-lg">
                        <img src="imagenes/edit_mbl.jpg">
                    </figure>

                    <div class="col-md-offset-3 col-md-6 pd-0">
                        <div class="box_text_pt box_text_slider">
                            <h1>La soberanía del alfarero</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- new post -->
            <div class="box_wrapper">
                <a href="">
                    <figure class="imgDsktp hidden-xs">
                        <img src="imagenes/event_dsktp.jpg">
                    </figure>

                    <figure class="imgMbl hidden-sm hidden-md hidden-lg">
                        <img src="imagenes/event_mbl.jpg">
                    </figure>

                    <div class="col-md-offset-3 col-md-6 pd-0">
                        <div class="box_text_pt box_text_slider">
                            <h1>Convención en Honduras</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- REVISTA -->
<section id="edit_printed">
    <div class="ng-container">
        <h2>NUESTRAS EDICIONES</h2>
        <div class="row col-eq">
            <div class="col-xs-12 col-sm-8 col-md-8">
                <ul class="slider">
                    <!-- new post -->
                    <div class="box_wrapper">
                        <a href="">
                            <figure class="imgDsktp">
                                <img src="imagenes/revista_1.jpg">
                            </figure>
                        </a>
                    </div>
                    <!-- new post -->
                    <div class="box_wrapper">
                        <a href="">
                            <figure class="imgDsktp">
                                <img src="imagenes/revista_2.jpg">
                            </figure>
                        </a>
                    </div>
                    <!-- new post -->
                    <div class="box_wrapper">
                        <a href="">
                            <figure class="imgDsktp">
                                <img src="imagenes/revista_3.jpg">
                            </figure>
                        </a>
                    </div>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="box_tn">
                    <p>Lorem ipsum dolor sit amet,consectetur do eiusmod tempor incididunt ut labore do et.et.adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    <div class="btn_ btn_3">
                        <span><a href="" > VER MÁS</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



