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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', function () {
    return view('partials.cursos');
});

Route::get('/login', function () {
    return view('partials.login');
});

Auth::routes();

Route::get('/send', 'HomeController@index')->name('Academia Cierva');

Route::group(['middleware' => 'auth'], function () {

    Route::get("/panel" , function(){ return view("admin.panel"); });

    Route::get("/register" , 'usuariosController@returnCursos');
    Route::post("/edit", "usuariosController@edit_user");

    Route::post("/registro", "usuariosController@store");
    Route::get("/show_users", "usuariosController@show");

    Route::get("/registro_c", 'cursosController@show');
});
