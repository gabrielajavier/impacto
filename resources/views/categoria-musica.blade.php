@extends ('layouts.app')

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
                    <h1>Sendas Dios hará, un himno que surgió de la tragedia </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                </div>

                <!-- autor -->
                <div class="entry-author row">
                    <div class="author col-sm-3">
                        <p class="name mg-0">Rodel García</p>
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

                <!-- contenido fotográfico -->
                <div class="box_photo">
                    <figure>
                        <img src="imagenes/musica_1.jpg">
                        <div class="date_photo">
                            <p class="number_photo">1/1</p>
                            <div class="title_photo">
                                <h3 class="mg-0">Sendas Dios hará, un himno que surgió de la tragedia</h3>
                                <p>Foto: Imagen de archivo</p>
                            </div>
                        </div>
                    </figure>

                </div>
            </div>

            <div class="ng-container-text">
                <!-- redacción -->
                <div class="box_text">
                    <h3>Son muchos los países que han pasado por una situación similar a la que vive hoy, nuestro hermano país Venezuela.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <a href="">Nulla consequat massa quis enim.</a> Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p>

                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, <a href="">blandit vel luctus</a>  pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. </p>

                    <!-- texto destacado -->
                    <div class="highlighted_text">
                        <p>Que la fe siga incesante, que no se apague la esperanza, sino que esta sea hallada en Jesucristo, todos los días.</p>
                    </div>

                    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>

                    <!-- audio -->
                    <div class="music_audio">
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/283781458&color=%23ff5500&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                    </div>

                    <!-- letra -->
                    <div class="music_lyrics text-center">
                        <h2>LETRA</h2>
                        <p>Sendas Dios hará<br>
                            Donde piensas que no hay<br>
                            El obra en maneras que<br>
                            No podemos entender<br>
                            El me guiará<br>
                            A su lado estaré<br>
                            Amor y fuerza me dará<br>
                            Un camino hará<br>
                            Donde no lo hay<br>
                            (Se repite)<br><br>

                            Si camino en la soledad<br>
                            Me guiará<br>
                            Y agua en el desierto encontraré<br>
                            La tierra pasará<br>
                            Su Palabra eterna es<br>
                            El hará algo nuevo hoy<br><br>

                            Sendas Dios hará<br>
                            Donde piensas que no hay<br>
                            El obra en maneras que<br>
                            No podemos entender<br>
                            El me guiará<br>
                            A su lado estaré<br>
                            Amor y fuerza me dará<br>
                            Un camino hará<br>
                            Donde no lo hay</p>

                        <div class="btn_ text-center">
                    <span class="text-left">
                      <a class="pd-0" href="">
                        <i class="icon-g-clef-musical-note"></i>
                        <p>DESCARGAR<span><br>PARTITURA</span></p>
                      </a>
                    </span>
                        </div>
                    </div>

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
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/musica_2.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>un cántico que expresa una fe innegable</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/musica_3.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>Dios descendió, de gloria me llenó</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/musica_4.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>un día a la gloria el me llevará himno</h1>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/musica_5.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>EL CÁNTICO QUE CAMBIA LAS CIRCUNSTANCIAS</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/musica_6.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>PECADOR VEN AL DULCE JESÚS, RECORDANDO EL AMOR DE DIOS</h1>
                                    </div>
                                </a>
                            </article>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article>
                                <figure>
                                    <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios"><img src="imagenes/musica_7.jpg"></a>
                                </figure>
                                <a href="" title="Más de 20 mil se reunieron en Colombia para adorar a Dios">
                                    <div class="text">
                                        <h1>EL DÍA EN QUE UN HIMNO CAMBIÓ LA HISTORIA DE UN PAÍS</h1>
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
