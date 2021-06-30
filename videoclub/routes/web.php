<?php

use Illuminate\Support\Facades\Route;

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

/* EJERCICIO 2
Route::get('/', function () {
    return 'Esta es la pantalla principal';
});

Route::get('/login', function () {
    return 'Esta es la vista del login de usuario';
});

Route::get('/logout', function () {
    return 'Esta es la vista del logout de usuario';
});

Route::get('/catalog', function () {
    return 'Esta es la vista del listado de peliculas';
});

Route::get('/catalog/show/{id}', function ($id) {
    return 'Esta es la vista detalle de la película '.$id;
});

Route::get('/catalog/create', function () {
    return 'Esta es la vista para añadir una pelicula';
});

Route::get('/catalog/edit/{id}', function ($id) {
    return 'Esta es la vista para modificar la película '.$id;
});
FIN EJERCICIO 2 */

//EJERCICIO 3

// Route::get('/auth', function () {
//     return view('login');
// });

// Route::get('/catalog', function () {
//     return view('index');
// });

// Route::get('/catalog/show{id}', function ($id) {
//     return view('show');
// });

// Route::get('/catalog/create', function () {
//     return view('create');
// });

// Route::get('/catalog/edit/{id}', function ($id) {
//     return view('edit');
// });

Route::get('/', 'CatalogController@home');

Route::get('/catalog', 'CatalogController@index');

Route::get('/catalog/show/{id}', 'CatalogController@show');

Route::get('/login', 'CatalogController@login');

Route::get('/catalog/create', 'CatalogController@create');

Route::get('catalog/edit', 'CatalogController@edit');