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
                     <div contenteditable="true" id="editor_textarea" role="textbox" dir="ltr" aria-multiline="true"
                      name="contenido_main" class="textarea editor" aria-required="true">
                         <div style="font-size:15px;color:gray";>
                           <br>
                         </div>
                     </div>
                     <div id="editor"  class="editor__toolbar" role="toolbar">
                         <div class="editor__toolbar--item">
                             <button  type="button" tabindex="-1" aria-haspopup="false"
                                     data-toggle="tooltip" data-placement="bottom" title="Negrita">
                                 <div class="editor__toolbar--imagebold">
                                     <img data-editor="bold" src="../../imagenes/bold.png"/>
                                 </div>
                             </button>
                         </div>
                         <div class="editor__toolbar--item">
                             <button  type="button" tabindex="0" aria-haspopup="false"
                                     data-toggle="tooltip" data-placement="bottom" title="Alinear a la Izquierda">
                                 <div class="editor__toolbar--image">
                                     <img  data-editor="justifyLeft" src="../../imagenes/izquierda.png"/>
                                 </div>
                             </button>
                         </div>
                         <div class="editor__toolbar--item">
                             <button type="button" tabindex="1" aria-haspopup="false"
                                     data-toggle="tooltip" data-placement="bottom" title="Centrar">
                                 <div class="editor__toolbar--image">
                                     <img   data-editor="justifyCenter" src="../../imagenes/centro.png"/>
                                 </div>
                             </button>
                         </div>
                         <div class="editor__toolbar--item">
                             <button type="button" tabindex="2" aria-haspopup="false"
                                     data-toggle="tooltip" data-placement="bottom" title="Alinear a la Derecha">
                                 <div class="editor__toolbar--image">
                                     <img data-editor="justifyRight" src="../../imagenes/derecha.png"/>
                                 </div>
                             </button>
                         </div>
                         <div class="editor__toolbar--item">
                             <button type="button" tabindex="3" aria-haspopup="false"
                                     data-toggle="tooltip" data-placement="bottom" title="Cursiva">
                                 <div class="editor__toolbar--image">
                                     <img data-editor="italic" src="../../imagenes/cursiva.png"/>
                                 </div>
                             </button>
                         </div>
                     </div>
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
                    <span class="file_main" id="file_main"></span>
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
                               <div contenteditable="true" id="editor_textarea_imagen1" role="textbox" dir="ltr" aria-multiline="true"
                                    name="texto_imagen" class="textarea editor" aria-required="true">
                                   <div style="font-size:15px;color:gray";>
                                       <br>
                                   </div>
                               </div>
                               <div id="editor_imagen1"  class="editor__toolbar" role="toolbar">
                                   <div class="editor__toolbar--item">
                                       <button  type="button" tabindex="-1" aria-haspopup="false"
                                                data-toggle="tooltip" data-placement="bottom" title="Negrita">
                                           <div class="editor__toolbar--imagebold">
                                               <img data-editor="bold" src="../../imagenes/bold.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button  type="button" tabindex="0" aria-haspopup="false"
                                                data-toggle="tooltip" data-placement="bottom" title="Alinear a la Izquierda">
                                           <div class="editor__toolbar--image">
                                               <img  data-editor="justifyLeft" src="../../imagenes/izquierda.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="1" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Centrar">
                                           <div class="editor__toolbar--image">
                                               <img   data-editor="justifyCenter" src="../../imagenes/centro.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="2" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Alinear a la Derecha">
                                           <div class="editor__toolbar--image">
                                               <img data-editor="justifyRight" src="../../imagenes/derecha.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="3" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Cursiva">
                                           <div class="editor__toolbar--image">
                                               <img data-editor="italic" src="../../imagenes/cursiva.png"/>
                                           </div>
                                       </button>
                                   </div>
                               </div>
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
                           <span class="file_main" id="file_main_imagen1"></span>
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
                               <div contenteditable="true" id="editor_textarea_imagen2" role="textbox" dir="ltr" aria-multiline="true"
                                    name="texto_imagen" class="textarea editor" aria-required="true">
                                   <div style="font-size:15px;color:gray";>
                                       <br>
                                   </div>
                               </div>
                               <div id="editor_imagen2"  class="editor__toolbar" role="toolbar">
                                   <div class="editor__toolbar--item">
                                       <button  type="button" tabindex="-1" aria-haspopup="false"
                                                data-toggle="tooltip" data-placement="bottom" title="Negrita">
                                           <div class="editor__toolbar--imagebold">
                                               <img data-editor="bold" src="../../imagenes/bold.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button  type="button" tabindex="0" aria-haspopup="false"
                                                data-toggle="tooltip" data-placement="bottom" title="Alinear a la Izquierda">
                                           <div class="editor__toolbar--image">
                                               <img  data-editor="justifyLeft" src="../../imagenes/izquierda.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="1" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Centrar">
                                           <div class="editor__toolbar--image">
                                               <img   data-editor="justifyCenter" src="../../imagenes/centro.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="2" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Alinear a la Derecha">
                                           <div class="editor__toolbar--image">
                                               <img data-editor="justifyRight" src="../../imagenes/derecha.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="3" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Cursiva">
                                           <div class="editor__toolbar--image">
                                               <img data-editor="italic" src="../../imagenes/cursiva.png"/>
                                           </div>
                                       </button>
                                   </div>
                               </div>
                           </div>
                           <!--<div class="control">
                               <textarea class="textarea" placeholder="Ingrese Texto Imagen" name="texto_imagen" required></textarea>
                           </div>-->
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
                             <span class="file_main" id="file_main_imagen2"></span>
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
                               <div contenteditable="true" id="editor_textarea_imagen3" role="textbox" dir="ltr" aria-multiline="true"
                                    name="texto_imagen" class="textarea editor" aria-required="true">
                                   <div style="font-size:15px;color:gray";>
                                       <br>
                                   </div>
                               </div>
                               <div id="editor_imagen3"  class="editor__toolbar" role="toolbar">
                                   <div class="editor__toolbar--item">
                                       <button  type="button" tabindex="-1" aria-haspopup="false"
                                                data-toggle="tooltip" data-placement="bottom" title="Negrita">
                                           <div class="editor__toolbar--imagebold">
                                               <img data-editor="bold" src="../../imagenes/bold.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button  type="button" tabindex="0" aria-haspopup="false"
                                                data-toggle="tooltip" data-placement="bottom" title="Alinear a la Izquierda">
                                           <div class="editor__toolbar--image">
                                               <img  data-editor="justifyLeft" src="../../imagenes/izquierda.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="1" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Centrar">
                                           <div class="editor__toolbar--image">
                                               <img   data-editor="justifyCenter" src="../../imagenes/centro.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="2" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Alinear a la Derecha">
                                           <div class="editor__toolbar--image">
                                               <img data-editor="justifyRight" src="../../imagenes/derecha.png"/>
                                           </div>
                                       </button>
                                   </div>
                                   <div class="editor__toolbar--item">
                                       <button type="button" tabindex="3" aria-haspopup="false"
                                               data-toggle="tooltip" data-placement="bottom" title="Cursiva">
                                           <div class="editor__toolbar--image">
                                               <img data-editor="italic" src="../../imagenes/cursiva.png"/>
                                           </div>
                                       </button>
                                   </div>
                               </div>
                           </div>
                           <!--<div class="control">
                               <textarea class="textarea" placeholder="Ingrese Texto de Imagen"  name="texto_imagen" required></textarea>
                           </div>-->
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
                             <span class="file_main" id="file_main_imagen3"></span>
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
                           <div contenteditable="true" id="editor_textarea_video" role="textbox" dir="ltr" aria-multiline="true"
                                name="texto_video" class="textarea editor" aria-required="true">
                               <div style="font-size:15px;color:gray";>
                                   <br>
                               </div>
                           </div>
                           <div id="editor_video"  class="editor__toolbar" role="toolbar">
                               <div class="editor__toolbar--item">
                                   <button  type="button" tabindex="-1" aria-haspopup="false"
                                            data-toggle="tooltip" data-placement="bottom" title="Negrita">
                                       <div class="editor__toolbar--imagebold">
                                           <img data-editor="bold" src="../../imagenes/bold.png"/>
                                       </div>
                                   </button>
                               </div>
                               <div class="editor__toolbar--item">
                                   <button  type="button" tabindex="0" aria-haspopup="false"
                                            data-toggle="tooltip" data-placement="bottom" title="Alinear a la Izquierda">
                                       <div class="editor__toolbar--image">
                                           <img  data-editor="justifyLeft" src="../../imagenes/izquierda.png"/>
                                       </div>
                                   </button>
                               </div>
                               <div class="editor__toolbar--item">
                                   <button type="button" tabindex="1" aria-haspopup="false"
                                           data-toggle="tooltip" data-placement="bottom" title="Centrar">
                                       <div class="editor__toolbar--image">
                                           <img   data-editor="justifyCenter" src="../../imagenes/centro.png"/>
                                       </div>
                                   </button>
                               </div>
                               <div class="editor__toolbar--item">
                                   <button type="button" tabindex="2" aria-haspopup="false"
                                           data-toggle="tooltip" data-placement="bottom" title="Alinear a la Derecha">
                                       <div class="editor__toolbar--image">
                                           <img data-editor="justifyRight" src="../../imagenes/derecha.png"/>
                                       </div>
                                   </button>
                               </div>
                               <div class="editor__toolbar--item">
                                   <button type="button" tabindex="3" aria-haspopup="false"
                                           data-toggle="tooltip" data-placement="bottom" title="Cursiva">
                                       <div class="editor__toolbar--image">
                                           <img data-editor="italic" src="../../imagenes/cursiva.png"/>
                                       </div>
                                   </button>
                               </div>
                           </div>
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
