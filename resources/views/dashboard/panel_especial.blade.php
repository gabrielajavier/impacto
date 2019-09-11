@extends('layouts.app_root')

@section('styles')
    <link rel="stylesheet" href="{{mix('css/dashboard_root/especial.css')}}">
@endsection


@section('content')
    <header class="header__panel--noticias">
        <h1>ESPECIAL</h1>
    </header>
    <section class="section__panel--noticias">
        <div class="tabs">
            <ul id="noticias_list" class="panel__noticias--list">
                <li><a data-tab="noticias_principal">Contenido Principal</a></li>
                <li><a data-tab="noticias_secundario">Contenido Secundario</a></li>
                <li><a data-tab="noticias_enlaces">Enlaces</a></li>
            </ul>
        </div>

        <div id="noticias_principal" class="noticias_principal">
            <form action="">
                <div class="field">
                    <div class="control">
                        <label for="">Titulo</label>
                        <input class="input" type="text" placeholder="Ingrese Titulo Principal" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <label for="">Contenido</label>
                        <textarea class="textarea" placeholder="Ingrese Contenido Principal" required></textarea>
                    </div>
                </div>
                <div class="file">
                    <label class="file-label">
                        <input class="file-input" type="file" name="resume">
                        <span class="file-cta">
                     <span class="file-icon">
                       <i class="fas fa-upload"></i>
                     </span>
                     <span class="file-label">
                        Subir Imagen Principal
                     </span>
                    </span>
                    </label>
                </div>
                <div class="field">
                    <div class="control button_principal">
                        <button class="button is-link">Agregar Contenido</button>
                    </div>
                </div>
            </form>
        </div>


        <div id="noticias_secundario" class="noticias_secundario hide">
            <div class="control noticias_secundario--type">
                <h3 class="noticias_secundario--title">Selecciona el tipo de Contenido:</h3>
                <label class="radio">
                    <input type="radio" name="typeContenido">
                    Imagenes
                </label>
                <label class="radio">
                    <input type="radio" name="typeContenido" checked>
                    Video
                </label>
            </div>

            <div class="noticias__primer--content">
                <div class="noticias__content1">
                    <span class="noticias__content1--icon">
                       <i class="fas fa-images"></i>
                    </span>
                    <span class="noticias__content1--title">
                        Contenido de la Primera Imagen
                       <span class="noticias__content1--subtitle">¡Completa todos Los campos!</span>
                    </span>
                    <span class="noticias__content1--down">
                         <a id="noticia_content_1">
                             <i class="fas fa-sort-down"></i>
                         </a>
                    </span>
                </div>
                <form id="form_content1" class="form_content1 hide">
                    <div class="field">
                        <label>Titulo Imagen</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label>Contenido Imagen</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Textarea"></textarea>
                        </div>
                    </div>
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="resume">
                            <span class="file-cta">
                              <span class="file-icon">
                                <i class="fas fa-upload"></i>
                              </span>
                              <span class="file-label">
                                 Subir Imagen
                              </span>
                           </span>
                        </label>
                    </div>
                    <div class="field">
                        <div class="control button_content1">
                            <button class="button is-link">
                                Agregar Contenido
                            </button>
                        </div>
                    </div>
                </form>
            </div>


            <div class="noticias__primer--content">
                <div class="noticias__content1">
                    <span class="noticias__content1--icon">
                       <i class="fas fa-images"></i>
                    </span>
                    <span class="noticias__content1--title">
                        Contenido de la Segunda Imagen
                       <span class="noticias__content1--subtitle">¡Completa todos Los campos!</span>
                    </span>
                    <span class="noticias__content2--down">
                         <a id="noticia_content_2">
                             <i class="fas fa-sort-down"></i>
                         </a>
                    </span>
                </div>
                <form id="form_content2" class="form_content1 hide">
                    <div class="field">
                        <label>Titulo Imagen</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label>Contenido Imagen</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Textarea"></textarea>
                        </div>
                    </div>
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="resume">
                            <span class="file-cta">
                              <span class="file-icon">
                                <i class="fas fa-upload"></i>
                              </span>
                              <span class="file-label">
                                 Subir Imagen
                              </span>
                           </span>
                        </label>
                    </div>
                    <div class="field">
                        <div class="control button_content1">
                            <button class="button is-link">
                                Agregar Contenido
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="noticias__primer--content">
                <div class="noticias__content1">
                    <span class="noticias__content1--icon">
                       <i class="fas fa-images"></i>
                    </span>
                    <span class="noticias__content1--title">
                        Contenido de la Tercera Imagen
                       <span class="noticias__content1--subtitle">¡Completa todos Los campos!</span>
                    </span>
                    <span class="noticias__content3--down">
                         <a id="noticia_content_3">
                             <i class="fas fa-sort-down"></i>
                         </a>
                    </span>
                </div>
                <form id="form_content3" class="form_content1 hide">
                    <div class="field">
                        <label>Titulo Imagen</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label>Contenido Imagen</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Textarea"></textarea>
                        </div>
                    </div>
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="resume">
                            <span class="file-cta">
                              <span class="file-icon">
                                <i class="fas fa-upload"></i>
                              </span>
                              <span class="file-label">
                                 Subir Imagen
                              </span>
                           </span>
                        </label>
                    </div>
                    <div class="field">
                        <div class="control button_content1">
                            <button class="button is-link">
                                Agregar Contenido
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div id="noticias_enlaces" class="noticias_enlaces hide">
            <form action="">
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection


@section('scripts')
    <script src="{{ mix('js/dashboard/especial.js')}}"></script>
@endsection
