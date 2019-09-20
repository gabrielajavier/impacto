@extends('layouts.app')

@section('content')
    <!-- CONTENIDO -->
    <section id="general-content">
        <article>
            <div class="ng-container-media">
                <!-- encabezado -->
                <div class="header_post">
                    <p id="breadcrumb">
                        <a class="line_yell" href="">INICIO</a>
                        <a href="">{{$categoria}}</a>
                    </p>
                </div>

                <!-- título-->
                <div class="ng-container-text title_post">
                    <h1>{{$contenidotitulo}}</h1>
                    <p>
                        {{$contenidomain}}
                    </p>
                </div>

                <!-- autor -->
                <div class="entry-author row">

                    <div class="author col-sm-3">
                        <p class="name mg-0"><a href="">Rodel García</a></p>
                        <p class="date mg-0">
                            <time>24 de febrero de 2019</time>
                        </p>
                    </div>

                    <div class="tags col-sm-6">
                        <a class="line_dark" href="">#{{$categoria}}</a>
                        <a class="line_dark" href="">#Europa</a>
                        <a href="">#SOCIAL</a>
                    </div>

                    <div class=" col-sm-3">
                        <span><a class="pd-0" href=""><img src="../../imagenes/icon_facebook.png"></a></span>
                        <span><a class="pd-0" href=""><img src="../../imagenes/icon_twitter.png"></a></span>
                        <span><a class="pd-0" href=""><img src="../../imagenes/icon_instagram.png"></a></span>
                    </div>
                </div>

                <!-- contenido fotográfico-->
                <div class="box_photo">
                    <figure>
                        <div class="videoWrapper">
                            <iframe width="560" height="315" src={{$contenido->tipo_contenido_url}} frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="date_photo">
                            <div class="title_photo">
                                <h3 class="mg-0">{{$contenido->tipo_contenido_leyenda}}</h3>
                                <p>Foto: Fuente de Noticias AP</p>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="ng-container-text">
                <!-- redacción-->
                <div class="box_text">
                    <p>
                        {{$contenido->tipo_contenido_texto}}
                    </p>
                </div>
                <!-- compartir por redes -->
                <div class="text-center">
                    <h3>COMPÁRTELO</h3>
                    <div class="">
                        <span><a class="" href=""><img src="../../imagenes/icon_facebook1.png"></a></span>
                        <span><a class="" href=""><img src="../../imagenes/icon_twitter1.png"></a></span>
                        <span><a class="" href=""><img src="../../imagenes/icon_instagram1.png"></a></span>
                    </div>
                </div>
                <!-- contenido relacionado -->
                <div class="related_content">
                    <h2>VEA TAMBIÉN </h2>
                    @foreach($enlaces as $enlace)
                        <p><a href="{{$enlace->enlace_url}}">{{$enlace->enlace_titulo}}</a></p>
                    @endforeach
                </div>
            </div>

            <div class="ng-container-media">
                <!-- lo más visto -->
                <div class="more_view_post">
                    <h2>LO MÁS VISTO</h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="../../imagenes/img_7.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>Más de 20 mil se reunieron en Colombia para adorar a Dios</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="../../imagenes/img_8.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>Guaidó pide a gobiernos considerar"todas las cartas"</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="../../imagenes/img_9.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>“Le pido a mi hijo oficial, que entregue su arma”</h1>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="../../imagenes/img_10.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>“Venezuela tiene que buscar la democracia” donald trump</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="../../imagenes/img_11.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>España y perú colaboran por la paz en toda sudamérica</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="../../imagenes/img_12.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>Más QUE UN CARPINTERO un salvador del mundo</h1>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>


                    <div class="load_more_post">
                        <a href="">MÁS NOTICIA</a>
                    </div>

                </div>
                <article>
                    <figure>
                        <a href=""><img src="../../imagenes/publicity_horizontal.jpg"></a>
                    </figure>
                </article>
            </div>
        </article>
    </section>
@endsection
