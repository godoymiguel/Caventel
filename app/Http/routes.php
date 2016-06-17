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

Route::group(['middleware' => ['web'], 'prefix' => 'Admin'], function(){

    Route::resource('users', 'UsersController');

    Route::resource('user_profiles', 'UserProfileController');
    
    Route::resource('news','NewsController');
    Route::get('news/{id}/destroy', [
        'uses' => 'NewsController@destroy',
        'as' => 'Admin.news.destroy'
    ]);
    
    /*  

    Route::resource('user_assets','UserAssetsController');

    Route::resource('user_loans','UserLoansController');

    Route::resource('heritage_assets','HeritageAssetsController');

    Route::resource('heritage_property','HeritagePropertyController');
*/
//    Route::get('/', 'LoginController@index');
});

Route::get('Inactivo', function () {
    return view('auth.lock');
});

Route::get('Ingreso', function () {
    return view('Admin.Register');
});

Route::get('recover', function () {
    return view('auth.recover');
});

Route::get('welcome', function () {
    return view('welcome');
});

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
    Route::auth();

    Route::get('/', [
        'uses' => 'HomeController@Index',
        'as' => 'user.index'
    ]);

    Route::get('Contactos', [
        'uses' => 'HomeController@Contact',
        'as' => 'user.contact'
    ]);

    Route::get('Nosotros', [
        'uses' => 'HomeController@About',
        'as' => 'user.about'
    ]);

    Route::get('Prestamos', [
        'uses' => 'HomeController@Loan',
        'as' => 'user.loan'
    ]);

    Route::get('Beneficios', [
        'uses' => 'HomeController@Benefit',
        'as' => 'user.benefit'
    ]);

    Route::get('Asociado', [
        'uses' => 'HomeController@Info',
        'as' => 'user.info'
    ]);
    
    Route::get('Noticias', [
        'uses' => 'HomeController@News',
        'as' => 'user.news'
    ]);

    Route::get('Noticia/{id}', [
        'uses' => 'HomeController@ShowNews',
        'as' => 'user.shownews'
    ]);

    Route::get('Admin', [
        'uses' => 'LoginController@index',
        'as' => 'admin.index'
    ]);
});
