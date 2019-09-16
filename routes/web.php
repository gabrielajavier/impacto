<?php

/*rutas de la app web*/
Route::get('/', 'HomeController@home');
Route::get('/noticias','HomeController@noticias');
Route::get('/especial','HomeController@especial');
Route::get('/musica','HomeController@musica');
Route::get('/literatura','HomeController@literatura');
Route::get('/heroes','HomeController@heroes');
Route::get('/suscribete','HomeController@suscribete');


/*rutas dashboard root*/
Route::get('/login_root','RootController@index');
Route::post('/login_root','RootController@login');
Route::get('/sesion_close','DashboardRootController@closeSesion');
Route::middleware(['login'])->group(function () {
    /*rutas categoria*/
    Route::get('/panel/categoria/','DashboardRootController@index');
    Route::post('/contenido/principal','CategoriaController@saveContenidoPrincipal');
    Route::post('/contenido/enlaces/{id}','CategoriaController@saveEnlaces');
    Route::post('/contenido/secundario/{id}','categoriaController@saveSecundario');
    Route::post('/contenido/secundario2/{id}','categoriaController@saveSecundarioTwo');
    Route::post('/contenido/secundario3/{id}','categoriaController@saveSecundarioThree');

    Route::get('/mantenimiento','MantenimientoController@index');
    Route::post('/mantenimiento','MantenimientoController@addUser');
    Route::get('/mantenimiento/{id}','MantenimientoController@editUser');
    Route::post('/mantenimiento/{id}','MantenimientoController@saveEditUser');
});





