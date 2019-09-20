@extends('layouts.app')

@section('content')
    <!-- CONTENIDO -->
    <section id="general-content">
        <article>
            <div class="ng-container-media">
                <!-- lo más visto -->
                <div class="more_view_post">
                    <h2>{{$categoria}}</h2>
                    @foreach($heroes as $heroe)
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                <article class="noticias_images">
                                    <figure>
                                        <a href="/contenido/{{$categoria}}/{{$heroe->id}}" title={{$heroe->contenidotitulo}}>
                                            <img src="images/{{$heroe->contenidoimagen}}">
                                        </a>
                                    </figure>
                                    <a href="/contenido/{{$categoria}}/{{$heroe->id}}" title={{$heroe->contenidotitulo}}>
                                        <div class="text">
                                            <h1>{{$heroe->contenidotitulo}}</h1>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            @endforeach
                        </div>
                        <div class="load_more_post">
                            <a href="">MÁS CONTENIDO</a>
                        </div>
                </div>
            </div>
        </article>
    </section>
@endsection
