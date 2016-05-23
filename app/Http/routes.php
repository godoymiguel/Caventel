<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'Admin'], function(){

    Route::resource('Users', 'UsersController');

    Route::get('/', function () {
        return view('Admin.Index');
    });
});

//Route::resource('', 'InfoviewController');

Route::post('login', function () {
    return view('Admin.Index');
});

Route::get('Inactivo', function () {
    return view('auth.lock');
});

Route::get('Ingreso', function () {
    return view('Admin.Register');
});


Route::get('/', function () {
    return view('User.Index');
});

Route::get('Asociado', function () {
    return view('User.Info');
});

Route::get('Noticias', function () {
    return view('User.News1');
});
Route::get('NuevaPagina', function () {
    return view('User.news.NewPage');
});

Route::get('Nosotros', function () {
    return view('User.About');
});

Route::get('Contactos', function () {
    return view('User.Contact');
});

Route::get('Prestamos', function () {
    return view('User.Loan');
});

Route::get('Beneficios', function () {
    return view('User.Benefit');
});

Route::get('recover', function () {
    return view('auth.recover');
});

Route::get('login', 'LoginController@SingIn');
//Route::get('User','UserController@Index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
