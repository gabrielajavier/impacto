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
                        <a href="">NOTICIA </a>
                    </p>
                </div>

                <!-- título-->
                <div class="ng-container-text title_post">
                    <h1>La milagrosa historia de un hombre que logró vencer el cáncer</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                </div>

                <!-- autor -->
                <div class="entry-author row">
                    <div class="author col-sm-3">
                        <p class="name mg-0">Miguel Castro</p>
                        <p class="date mg-0">
                            <time>24 de febrero de 2019</time>
                        </p>
                    </div>

                    <div class="tags col-sm-6">
                        <a class="line_dark" href="">#testimonio</a>
                        <a class="line_dark" href="">#milagro</a>
                        <a href="">#social</a>
                    </div>

                    <div class="redes-ft share_ft col-sm-3">
                        <span><a class="pd-0" href=""><i class="icon-facebook"></i></a></span>
                        <span><a class="pd-0" href=""><i class="icon-tweet"></i></a></span>
                        <span><a class="pd-0" href=""><i class="icon-instagram"></i></a></span>
                    </div>
                </div>

                <!-- contenido fotográfico-->
                <div class="box_photo">
                    <figure>
                        <img src="imagenes/testimonio_1.jpg">
                        <div class="date_photo">
                            <p class="number_photo">1/3</p>
                            <div class="title_photo">
                                <h3 class="mg-0">Oremos por Venezuela</h3>
                                <p>Foto: Fuente de Noticias AP</p>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <img src="imagenes/testimonio_2.jpg">
                        <div class="date_photo">
                            <p class="number_photo">2/3</p>
                            <div class="title_photo">
                                <h4 class="mg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporsit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet.</h4>
                                <p>Foto: Fuente de Noticias AP</p>
                            </div>
                        </div>
                    </figure>
                    <figure>
                        <img src="imagenes/testimonio_3.jpg">
                        <div class="date_photo">
                            <p class="number_photo">3/3</p>
                            <div class="title_photo">
                                <h3 class="mg-0">Oremos por Venezuela</h3>
                                <p>Foto: Fuente de Noticias AP</p>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="ng-container-text">
                <!-- redacción-->
                <div class="box_text">
                    <h3>Son muchos los países que han pasado por una situación similar a la que vive hoy, nuestro hermano país Venezuela.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <a href="">Nulla consequat massa quis enim.</a> Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p>

                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, <a href="">blandit vel luctus</a>  pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. </p>

                    <div class="highlighted_text">
                        <p>Que la fe siga incesante, que no se apague la esperanza, sino que esta sea hallada en Jesucristo, todos los días.</p>
                    </div>

                    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="">Ut enim ad minim veniam</a>, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <a href="">deserunt mollit anim id est laborum.</a></p>
                </div>
                <!-- compartir por redes -->
                <div class="share_social text-center">
                    <h3>COMPÁRTELO</h3>
                    <div class="redes-ft">
                        <span><a class="pd-0" href=""><i class="icon-facebook"></i></a></span>
                        <span><a class="pd-0" href=""><i class="icon-tweet"></i></a></span>
                        <span><a class="pd-0" href=""><i class="icon-instagram"></i></a></span>
                    </div>
                </div>
                <!-- contenido relacionado -->
                <div class="related_content">
                    <h2>VEA TAMBIÉN </h2>
                    <p><a href="">Barco de Puerto Rico que iba a Venezuela "recibió amenaza directa de fuego"</a></p>
                    <p><a href="">"Nos acribillaron": El lamento de los heridos en la frontera con Colombia"</a></p>
                    <p><a href="">Venezuela: oposición denuncia asesinato de 14 personas en frontera con Brasil</a></p>
                    <p><a href="">Juan Guaidó: Quema de ayuda humanitaria es "crimen de lesa humanidad"</a></p>
                    <p><a href="">“Los días de Maduro están contados", dice el secretario de Estado de EE.UU.</a></p>
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
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/testimonio_4.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>rebeca la mujer que venció con su fe una comunidad atea</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/testimonio_5.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>martha decidió creer que Dios podía cambiar su familia</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/testimonio_6.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>la historia de morgan, un exconvicto que conoció a Dios</h1>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/testimonio_7.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>dios me dió un hijo del que yo no podía tener</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/testimonio_8.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>una amistad que quebró las barreras  de la violencia</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/img_5.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>Dios restauró mi familia a la que yo destruí</h1>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>
                    <div class="load_more_post">
                        <a href="">MÁS NOTICIA</a>
                    </div>
                </div>

                <!-- publicity horizontal -->
                <article>
                    <figure>
                        <a href=""><img src="imagenes/publicity_horizontal.jpg"></a>
                    </figure>
                </article>
            </div>
        </article>
    </section>
@endsection
