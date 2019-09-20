@extends('layouts.app_root')

@section('styles')
    <link rel="stylesheet" href="{{mix('css/dashboard_root/noticias.css')}}">
@endsection


@section('content')
    <div class="field options_categoria">
        <div class="control">
            <label for="">Selecciona Categoria :</label>
            <div class="select is-warning">
                <select name="categorias" id="categorias">
                    @foreach($categorias as $categoria)
                      @if($categoria->id == 1)
                            <option value="{{$categoria->id}}" selected>{{$categoria->nombre_categoria}}</option>
                      @else
                           <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                      @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <header class="header__panel--noticias">
        <h1 id="title_categoria">NOTICIAS</h1>
    </header>

    <section class="section__panel--noticias">
        <div class="tabs">
            <ul id="noticias_list" class="panel__noticias--list">
                <span class="categoria_number">1</span><li><a data-tab="noticias_principal">Contenido Principal</a></li>
                <span class="categoria_number">2</span><li><a data-tab="noticias_secundario">Contenido Secundario</a></li>
                <span class="categoria_number">3</span><li><a data-tab="noticias_enlaces">Enlaces</a></li>
            </ul>
        </div>

        <div id="noticias_principal" class="noticias_principal">
           <form method="post" id="form_categoria_principal" action="/contenido/principal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="idcategoria" value="1" id="hidden_principal">
            <div class="field">
                <div class="control">
                    <label for="">Titulo</label>
                    <input name="contenido_titulo" class="input" type="text" placeholder="Ingrese Titulo Principal" required>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label for="">Contenido</label>
                    <textarea class="textarea"  name="contenido_main" placeholder="Ingrese Contenido Principal" required></textarea>
                </div>
            </div>
            <div class="file">
                <label class="file-label">
                    <input class="file-input" type="file" name="contenido_imagen" id="contenido_imagen" accept="image/jpeg,image/png,image/jpg">
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
                  <button id="button_form_noticias_principal" class="button is-link">Agregar Contenido</button>
              </div>
          </div>
         </form>
        <div class="message is-warning hide" id="mensaje_principal">
             <div class="message-body">
                  CONTENIDO CREADO
             </div>
       </div>
    </div>

        <!---CONTENIDO SECUNDARIO -->
        <div id="noticias_secundario" class="noticias_secundario hide">
            <div class="control noticias_secundario--type">
                <h3 class="noticias_secundario--title">Selecciona Solo un tipo de Contenido:</h3>
                <label class="radio">
                    <input type="radio" name="typeContenido" data-tab="imagenes" checked>
                     Imagenes
                </label>
                <label class="radio">
                    <input type="radio" name="typeContenido" data-tab="videos">
                    Video
                </label>
            </div>

           <div id="imagenes" class="">
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
                   <form id="form_content1" class="form_content1 hide" method="post" action="" enctype="multipart/form-data">
                       @csrf
                       <input type="hidden" name="idcontenido" id="hidden_content1">
                       <input type="hidden" name="tipo_archivo" id="tipo_archivo" value="imagenes">
                       <div class="field">
                           <label>Titulo Imagen</label>
                           <div class="control">
                               <input class="input" type="text" placeholder="Ingrese Titulo Imagen" name="titulo_imagen" required>
                           </div>
                       </div>

                       <div class="field">
                           <label>Contenido Imagen</label>
                           <div class="control">
                               <textarea class="textarea" placeholder="Ingrese Texto Imagen" name="texto_imagen" required></textarea>
                           </div>
                       </div>
                       <div class="file">
                           <label class="file-label">
                               <input class="file-input" type="file" name="file_imagen" id="contenido_imagen1" required>
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

                   <div id="mensaje_imagen1"  class="message is-warning hide">
                       <div class="message-body">
                              CONTENIDO CREADO
                        </div>
                    </div>
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
                   <form method="post" id="form_content2" class="form_content1 hide" action="" enctype="multipart/form-data">
                       @csrf
                       <input type="hidden" name="idcontenido" id="hidden_content2" value="">
                       <input type="hidden" name="tipo_archivo" id="tipo_archivo2" value="imagenes">
                       <div class="field">
                           <label>Titulo Imagen</label>
                           <div class="control">
                               <input class="input" type="text" placeholder="Ingrese Titulo Imagen"  name="titulo_imagen"  required>
                           </div>
                       </div>

                       <div class="field">
                           <label>Contenido Imagen</label>
                           <div class="control">
                               <textarea class="textarea" placeholder="Ingrese Texto Imagen" name="texto_imagen" required></textarea>
                           </div>
                       </div>
                       <div class="file">
                           <label class="file-label">
                               <input class="file-input" type="file" name="file_imagen" id="contenido_imagen2" required>
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
                   <div class="message is-warning hide" id="mensaje_imagen2">
                       <div class="message-body">
                           CONTENIDO CREADO
                       </div>
                   </div>
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
                   <form id="form_content3" class="form_content1 hide" method="post" enctype="multipart/form-data" action="">
                       @csrf
                       <input type="hidden" name="idcontenido" id="hidden_content3" value="">
                       <input type="hidden" name="tipo_archivo" id="tipo_archivo2" value="imagenes">
                       <div class="field">
                           <label>Titulo Imagen</label>
                           <div class="control">
                               <input class="input" type="text" placeholder="Titulo Imagen"  name="titulo_imagen" required>
                           </div>
                       </div>

                       <div class="field">
                           <label>Contenido Imagen</label>
                           <div class="control">
                               <textarea class="textarea" placeholder="Ingrese Texto de Imagen"  name="texto_imagen" required></textarea>
                           </div>
                       </div>
                       <div class="file">
                           <label class="file-label">
                               <input class="file-input" type="file" name="file_imagen"  id="contenido_imagen3" required>
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
                   <div class="message is-warning hide" id="mensaje_imagen3">
                       <div class="message-body">
                           CONTENIDO CREADO
                       </div>
                   </div>
               </div>
           </div>

           <div id="videos" class="content_video hide">
               <form action=""  method="post" id="form_video">
                   @csrf
                   <input type="hidden" name="tipo_archivo" id="tipo_archivo" value="video">
                   <input type="hidden" name="idcontenido" id="hidden_video" value="">
                   <div class="field">
                       <label>URL VIDEO</label>
                       <div class="control">
                           <input class="input" type="text" placeholder="Ingrese Url Video" name="video_url" required>
                       </div>
                   </div>
                   <div class="field">
                       <label>TITULO VIDEO</label>
                       <div class="control">
                           <input class="input" type="text" placeholder="Ingrese Titulo Video" name="titulo_video" required>
                       </div>
                   </div>
                   <div class="field">
                       <label>TEXTO VIDEO</label>
                       <div class="control">
                           <textarea class="textarea" placeholder="Ingrese Texto Video" name="texto_video" required></textarea>
                       </div>
                   </div>
                   <div class="control">
                       <button class="button is-warning">Ingrese Contenido Video</button>
                   </div>
               </form>
               <div id="mensaje_video"  class="message is-warning hide">
                   <div class="message-body">
                       CONTENIDO CREADO
                   </div>
               </div>
           </div>
         </div>
        <!--  FINAL DE CONTENIDO SECUNDARIO -->

        <div id="noticias_enlaces" class="noticias_enlaces hide">
            <form method="post" name="form_enlaces"  id="form_enlaces" action="">
                @csrf
                <input type="hidden" name="idcontenido" value="" id="hidden_enlaces">
                <div class="field enlaces">
                    <div class="field control">
                        <label class="label">Primer enlace:</label>
                    </div>
                   <div class="field is-grouped">
                       <div class="control">
                           <input class="input" type="text" placeholder="Ingrese titulo" name="enlace[]" required>
                       </div>
                       <div class="control">
                           <input class="input" type="url" placeholder="Ingrese url" name="url[]" required>
                       </div>
                   </div>
                </div>

                <div class="field enlaces">
                    <div class="field control">
                        <label class="label">Segundo enlace:</label>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <input class="input" type="text" placeholder="Ingrese titulo" name="enlace[]" required>
                        </div>
                        <div class="control">
                            <input class="input" type="url" placeholder="Ingrese url" name="url[]" required>
                        </div>
                    </div>
                </div>

                <div class="field enlaces">
                    <div class="field control">
                        <label class="label">Tercer enlace:</label>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <input class="input" type="text" placeholder="Ingrese titulo" name="enlace[]" requrired>
                        </div>
                        <div class="control">
                            <input class="input" type="url" placeholder="Ingrese url" name="url[]" required>
                        </div>
                    </div>
                </div>

                <div class="field enlaces">
                    <div class="field control">
                        <label class="label">Cuarto enlace:</label>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <input class="input" type="text" placeholder="Ingrese titulo" name="enlace[]" required>
                        </div>
                        <div class="control">
                            <input class="input" type="url" placeholder="Ingrese url" name="url[]" required>
                        </div>
                    </div>
                </div>

                <div class="field enlaces">
                    <div class="field control">
                        <label class="label">Quinto enlace:</label>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <input class="input" type="text" placeholder="Ingrese titulo" name="enlace[]" required>
                        </div>
                        <div class="control">
                            <input class="input" type="url" placeholder="Ingrese url" name="url[]" required>
                        </div>
                    </div>
                </div>
                <div class="control enlace_button">
                    <button class="button is-warning">Agregar Enlaces</button>
                </div>
                <div id="mensaje_enlaces" class="message is-warning hide">
                   <div class="message-body">
                        ENLACES CREADOS
                   </div>
                </div>
            </form>
        </div>
    </section>
@endsection


@section('scripts')
    <script src="{{ mix('js/dashboard/noticias.js')}}"></script>
    <script src="{{ mix('js/dashboard/categoria.js')}}"></script>
@endsection
