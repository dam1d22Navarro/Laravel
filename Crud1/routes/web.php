<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('enlaces');
});
/*
Route::get('/ruta1', function () {
    return "Mensaje ruta 1";
});
Route::get('/ruta2', function () {
    return view ('vista1');
});

Route::get('/ruta3', function () {
    return view ('vista2');
});
*/

Route::get('/general', function () {
    return view ('general');
});

Route::get('/deportiva', function () {
    return view ('deportes');
});
Route::get('/alu/{nombre}', function ($nombre) {
    return "Hola $nombre";
});

Route::get('/saludo/{nombre}', function ($nombre) {
    return view('saludo',['nombre' => $nombre]);
});
Route::get('/saludo1', 'PrincipalController@saludo1');
Route::get('/saludo2/{nombre}', 'PrincipalController@nombre');
Route::get('/nota/{nota}', 'AlumnosController@nota');
