@extends('layouts.app_root')

@section('styles')
    <link rel="stylesheet" href="{{mix('css/dashboard_root/posts.css')}}">
@endsection

@section('content')
     <header class="header__posts">
         <h2>Mis Posts</h2>
     </header>
     <section class="section__posts">
        <table class="table table__posts">
          <thead class="table__posts--head">
            <tr>
                <th>Categoria</th>
                <th>
                  Contenido Principal
                </th>
                 <!--<th>Contenido Secundario</th>-->
                <th>Enlaces</th>
            </tr>
          </thead>
          <tbody id="table__posts" class="table__posts--body">
             @foreach($posts as $post)
                <tr>
                    <td>{{$post["categoria"] }}</td>
                    <td class="posts__link">
                        <a id="btn_main" data-btn="principal"  data-url="principal" data-postid="{{ $post["id"] }}"
                           class="button posts__button fas fa-edit" data-target="modal-bis">
                            Editar Principal
                        </a>
                    </td>
                     <!--<td class="posts__link">
                        <a id="btn_secondary" data-btn="secundario"   data-postid="{{ $post["id"] }}"
                                class="button posts__button fas fa-edit" data-target="modal-bis">
                           Editar Secundario
                        </a>
                    </td>-->
                    <td class="posts__link">
                        <a id="btn_enlaces" data-btn="enlaces"   data-postid="{{ $post["id"] }}"
                           class="button posts__button fas fa-edit" data-target="modal-bis">
                            Editar Enlaces
                        </a>
                    </td>
                </tr>
             @endforeach
          </tbody>
        </table>
         <div id="modal_principal" class="modal">
             <div class="modal-background"></div>
             <form class="modal_principal" id="form_principal" method="post" enctype="multipart/form-data">
                 <button id="md_close_main" class="md__close">
                     <i class="fas fa-times"></i>
                 </button>
                 <h2>EDITAR CONTENIDO PRINCIPAL</h2>
                 <input type="hidden"  id="hide_principal" name="idcontenido" value="">
                 <div class="field">
                     <div class="control">
                         <label class="label">Categoria</label>
                         <select class="select_posts" name="select_posts" id="select_posts">
                             @foreach($categorias as $categoria)
                                 <option value="{{$categoria->id}}">
                                     {{$categoria->nombre_categoria}}
                                 </option>
                             @endforeach
                         </select>
                     </div>
                 </div>
                 <div class="field">
                     <label class="label">Titulo Principal</label>
                     <div class="control">
                         <input class="input principal_titulo" name="titulo" type="text"  required>
                     </div>
                 </div>
                 <div class="field">
                     <label class="label">Contenido Principal</label>
                     <div class="control">
                         <div contenteditable="true"  id="editor_principal" role="textbox" dir="ltr" aria-multiline="true"
                            class="textarea editor" aria-required="true">
                             <div style="font-size:15px;color:gray";>
                                 <br>
                             </div>
                         </div>
                       <div id="edit_principal">
                         <div class="editor__toolbar" role="toolbar">
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
                 </div>
                 <div class="field">
                     <div class="control btn_principal">
                         <button class="button">Editar Contenido</button>
                     </div>
                 </div>
                 <div id="message_principal" class="message is-success hide">
                     <div class="message-body">
                         CONTENIDO  EDITADO
                     </div>
                 </div>
             </form>
         </div>



        <div id="modal_secundario" class="modal">
           <div class="modal-background"></div>
           <h1>FORMULARIO SECUNDARIO</h1>
         </div>


         <div id="modal_enlaces" class="modal">
             <div class="modal-background"></div>
                 <form class="modal_enlaces" id="form_enlaces" method="post">
                      <button id="md_close_enlaces" class="md__close">
                         <i class="fas fa-times"></i>
                     </button>
                     <h2>EDITAR ENLACES</h2>
                     <input type="hidden"  id="hide_enlaces" name="idcontenido" value="">
                     <div class="field enlaces">
                         <div class="field control">
                             <label class="label">Primer enlace:</label>
                         </div>
                         <div class="field is-grouped">
                             <input type="hidden"   value="">
                             <div class="control">
                                 <input class="input" type="text" placeholder="titulo" name="enlace[]" required>
                             </div>
                             <div class="control">
                                 <input class="input" type="url" placeholder="url" name="url[]" required>
                             </div>
                         </div>
                     </div>

                     <div class="field enlaces">
                         <div class="field control">
                             <label class="label">Segundo enlace:</label>
                         </div>
                         <div class="field is-grouped">
                             <input type="hidden"   value="">
                             <div class="control">
                                 <input class="input" type="text" placeholder="titulo" name="enlace[]" required>
                             </div>
                             <div class="control">
                                 <input class="input" type="url" placeholder="url" name="url[]" required>
                             </div>
                         </div>
                     </div>

                     <div class="field enlaces">
                         <div class="field control">
                             <label class="label">Tercer enlace:</label>
                         </div>
                         <div class="field is-grouped">
                             <input type="hidden"   value="">
                             <div class="control">
                                 <input class="input" type="text" placeholder="titulo" name="enlace[]" requrired>
                             </div>
                             <div class="control">
                                 <input class="input" type="url" placeholder="url" name="url[]" required>
                             </div>
                         </div>
                     </div>

                     <div class="field enlaces">
                         <div class="field control">
                             <label class="label">Cuarto enlace:</label>
                         </div>
                         <div class="field is-grouped">
                             <input type="hidden"   value="">
                             <div class="control">
                                 <input class="input" type="text" placeholder="titulo" name="enlace[]" required>
                             </div>
                             <div class="control">
                                 <input class="input" type="url" placeholder="url" name="url[]" required>
                             </div>
                         </div>
                     </div>

                     <div class="field enlaces">
                         <div class="field control">
                             <label class="label">Quinto enlace:</label>
                         </div>
                         <div class="field is-grouped">
                             <input type="hidden"   value="">
                             <div class="control">
                                 <input class="input" type="text" placeholder="titulo" name="enlace[]" required>
                             </div>
                             <div class="control">
                                 <input class="input" type="url" placeholder="url" name="url[]" required>
                             </div>
                         </div>
                     </div>
                     <div class="control btn_enlaces">
                         <button class="button">Editar Enlaces</button>
                     </div>
                     <div id="message_enlaces" class="message is-success hide">
                         <div class="message-body">
                             ENLACES EDITADOS
                         </div>
                     </div>
                 </form>
         </div>
      </section>
@endsection

@section('scripts')
    <script src="{{ mix('js/dashboard/posts.js')}}"></script>
@endsection


