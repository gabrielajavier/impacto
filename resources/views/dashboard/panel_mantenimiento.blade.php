@extends('layouts.app_root')


@section('content')
    <header class="header__mantenimiento">
          <h2 class="header__mantenimiento--title">
              Mantenimiento Usuarios
          </h2>
    </header>
    <div class="mantenimiento__create--usuarios">
        <a id="btn_user" class="button" data-target="modal-bis">
            Crear nuevo Usuario
        </a>
    </div>
    <div id="modal_user" class="modal">
        <div id="modal_background" class="modal-background"></div>
        <form class="form__user--create"  name="form_user" method="POST" id="form_user" action="/mantenimiento" >
            <button id="modal_close" class="icon_close">
                <i class="fas fa-times"></i>
            </button>
            @csrf
            <input id="action_hidden" type="hidden" name="actionType" value="">
            <input id="id_hidden" type="hidden" name="idAction" name="id" value="">
            <div id="form__actionType" class="form__actionType--title"></div>
            <div class="modal-content">
                <div class="field">
                    <label class="label">Nombres</label>
                    <div class="control">
                        <input class="input" name="nombres" type="text" placeholder="Ingrese nombres" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Apellidos</label>
                    <div class="control">
                        <input class="input" name="apellidos" type="text" placeholder="Ingrese apellidos" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Usuario</label>
                    <div class="control">
                        <input class="input" name="usuario" type="text" placeholder="Ingrese usuario" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Correo</label>
                    <div class="control">
                        <input class="input" type="email" name="correo" placeholder="Ingrese correo" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Clave</label>
                    <div class="control">
                        <input class="input" type="password" name="clave" placeholder="Ingrese clave" required>
                    </div>
                </div>
                <div class="control">
                    <label class="label">Estado</label>
                    <input name="estado" type="radio" value="1">
                    <label>Activo</label>
                    <input name="estado" type="radio" value="0">
                    <label>Inactivo</label>
                </div>
                <div class="control field__submit" >
                    <button  type="submit" class="button" id="button__action--user"></button>
                </div>

                <div id="message_create_user" class="message is-primary hide__create--user hide__message--user">
                    <div class="message-body">
                        Usuario Creado
                    </div>
                </div>

                <div id="message_edit_user" class="message is-primary hide__edit--user hide__message--user">
                    <div class="message-body">
                        Usuario  Editado
                    </div>
                </div>

            </div>
        </form>
    </div>
    <table class="table">
        <thead>
          <tr class="table__row">
            <th>Nombres</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
              @foreach($users as $user)
                  <tr>
                    <td>
                        {{ explode(' ',$user->nombres)[0]}}
                         {{ explode(' ', $user->apellidos)[0]}}
                    </td>
                    <td class="table__column--user">
                        <span class="table__icon--user">
                            <i class="fas fa-user"></i>
                             {{$user->usuario}}
                        </span>
                    </td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->estado)
                          <span class="table__span--active">Activo</span>
                        @else
                          <span class="table__span--inactive">Inactivo</span>
                        @endif
                    </td>
                    <td>
                       <button id="btn__edit--user" class="table__button--edit fas fa-edit" data-id="{{$user->id}}">
                           Editar
                       </button>
                    </td>
                  </tr>
              @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script src="{{ mix('js/dashboard/mantenimiento.js')}}"></script>
@endsection
