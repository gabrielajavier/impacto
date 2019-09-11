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
    Route::get('/panel/noticias','DashboardRootController@index');
    Route::get('/panel/especial','DashboardRootController@especial');
    Route::get('/panel/musica','DashboardRootController@musica');
    Route::get('/panel/literatura','DashboardRootController@literatura');
    Route::get('/panel/heroes','DashboardRootController@heroes');

    Route::get('/mantenimiento','MantenimientoController@index');
    Route::get('/mantenimiento/menu','MantenimientoController@menu');
    Route::post('/mantenimiento','MantenimientoController@addUser');
    Route::get('/mantenimiento/{id}','MantenimientoController@editUser');
    Route::post('/mantenimiento/{id}','MantenimientoController@saveEditUser');
});





