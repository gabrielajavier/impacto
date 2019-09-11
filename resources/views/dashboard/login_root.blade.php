<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Root</title>
    <link rel="stylesheet" href="{{ mix('/css/dashboard_root/login_root.css')}}">
</head>
<body>
     <header class="header__root">
          <figure class="header__root--figure">
               <img src="imagenes/impacto_evangelistico.png"/>
          </figure>
     </header>
     <section class="section__root">
         <form class="section__root--form" method="post" action="/login_root">
              @csrf
              <h2 class="root__form--title">Inicio Sesion Root</h2>
             <div class="field">
                 <label class="label">Usuario</label>
                 <div class="control">
                     <input class="input" type="text" name="usuario"  id="usuario" placeholder="Ingrese su usuario"  value="{{ old('usuario') }}" required>
                 </div>
             </div>

             <div class="field">
                 <label class="label">Clave</label>
                 <div class="control">
                     <input class="input" type="password"  name="clave" id="clave" placeholder="Ingrese su clave" required>
                 </div>
             </div>
             <div class="control">
                 <button class="button">Ingresar</button>
             </div>
         </form>
         @if ($mensaje = Session::get('mensaje'))
             <div class="message is-danger">
                 <div class="message-body">
                     {{ $mensaje }}
                 </div>
             </div>
         @endif
     </section>

</body>
</html>
