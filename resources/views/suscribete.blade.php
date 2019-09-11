@extends('layouts.app')

@section('content')
    <!-- CONTENIDO -->
    <section id="general-content">
        <article>
            <div class="ng-container-media">
                <!-- video -->
                <div class="box_photo">
                    <figure>
                        <div class="videoWrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/7Q4S7VucJZM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </figure>
                </div>

                <!-- suscribirse -->
                <form action="" method="post" class="text-center">
                    <div class="">
                        <input type="text" name="nombre" class="imput-form bg-white" placeholder="Ingresa tu email aquí" required="">
                    </div>
                    <div class="btn_">
                        <button class="" type="submit" name="enviar" value="enviar">SUSCRIBIRME</button>
                    </div>
                </form>

                <!-- resultado -->


                <!-- contenido fotográfico -->
                <figure>
                    <img src="imagenes/suscribirse_1.jpg">
                </figure>
            </div>

            <div class="ng-container-text">

                <!-- redacción -->
                <div class="box_text text-center">
                    <h3 style="margin-top: 50px;">Novedades cada semana</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                    <!-- contenido fotográfico -->
                    <figure class="img_sb">
                        <img src="imagenes/ipad.png">
                    </figure>

                    <h3 style="margin-top: 50px;">Edición digital especial</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                    <!-- contenido fotográfico -->
                    <figure class="img_sb">
                        <img src="imagenes/laptop.png">
                    </figure>

                    <h3 style="margin-top: 50px;">Noticias de la semana</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                    <!-- suscribirse -->
                    <form action="" method="post" class="text-center">
                        <div class="">
                            <input type="text" name="nombre" class="imput-form bg-white" placeholder="Ingresa tu email aquí" required="">
                        </div>
                        <div class="btn_">
                            <button class="" type="submit" name="enviar" value="enviar">SUSCRIBIRME</button>
                        </div>
                    </form>

                </div>

            </div>

        </article>
    </section>
@endsection
