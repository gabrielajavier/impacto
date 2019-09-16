<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Root</title>
    <link rel="stylesheet" href="{{ mix('/css/app_root.css')}}">
    @yield('styles')
</head>
<body>
   <header class="dashboard__root">
        <figure class="dashboard__root--figure">
            <img src="../../imagenes/impacto_evangelistico.png"/>
        </figure>
         <nav class="dashboard__root--nav">
              <span class="root__nav--avatar">
                <i class="fas fa-user-circle"></i>
              </span>
              <span class="root__nav--user">
                   @if ($usuario = Session::get('usuario'))
                          {{ $usuario }}
                   @endif
              </span>
             <span class="root__nav--icon" id="menu_icon">
                    <i class="fas fa-chevron-down"></i>
             </span>
         </nav>
   </header>

   <div class="root__nav--sesion" id="menu_close">
       <i class="fas fa-times close"></i>
       <a href="/sesion_close">Cerrar Sesion</a>
   </div>

   <section class="dashboard__panel">
        <div class="dashboard__panel--options">
             <h2>
                 <span><i class="fas fa-solar-panel"></i></span>
                 Panel Usuario
             </h2>
             <div class="panel__categories">
                 <h4 class="panel__categories--title">CATEGORIAS</h4>
                 <ul class="panel__categories--list">
                     <li class="panel__categories--item">
                         <i class="fas fa-wrench"></i>
                         <a href="/panel/categoria">MANTENIMIENTO</a>
                     </li>
                 </ul>
             </div>

            @if($role = Session::get('role'))
               @if($role == "root")
                <div class="panel__usuarios">
                    <h4 class="panel__usuarios--title">USUARIOS</h4>
                    <ul class="panel__usuarios--list">
                        <li class="panel__usuarios--item">
                            <i class="fas fa-wrench"></i>
                            <a href="/mantenimiento">MANTENIMIENTO</a>
                        </li>
                    </ul>
                </div>
              @endif
            @endif
        </div>
       <div class="dashboard__panel--sections">
           @yield('content')
       </div>
   </section>


   <script src="{{ mix('js/app_root.js')}}"></script>
    @yield('scripts')
</body>
</html>
