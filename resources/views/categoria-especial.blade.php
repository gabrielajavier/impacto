@extends('layouts.app')

@section('content')
    <!-- CONTENIDO -->
    <section id="general-content">
        <article>
            <div class="ng-container-media">
                <!-- lo más visto -->
                <div class="more_view_post">
                    <h2>{{$categoria}}</h2>

                    @foreach($especiales as $especial)
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                <article class="noticias_images">
                                    <figure>
                                        <a href="/contenido/{{$categoria}}/{{$especial->id}}" title={{$especial->contenidotitulo}}>
                                            <img src="images/{{$especial->contenidoimagen}}">
                                        </a>
                                    </figure>
                                    <a href="/contenido/{{$categoria}}/{{$especial->id}}" title={{$especial->contenidotitulo}}>
                                        <div class="text">
                                            <h1>{{$especial->contenidotitulo}}</h1>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        <div class="load_more_post">
                            <a href="">MÁS ESPECIALES</a>
                        </div>
                </div>
            </div>
        </article>
    </section>
@endsection
