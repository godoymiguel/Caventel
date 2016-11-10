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

Route::group(['middleware' => ['web','auth'], 'prefix' => 'Admin'], function(){

    Route::resource('users', 'UsersController');

    Route::resource('user_profiles', 'UserProfileController');
    Route::get('user_profiles/{id}/create', [
        'uses' => 'UserProfileController@create',
        'as' => 'Admin.user_profiles.create'
    ]);
    Route::post('user_profiles/{id}', [
        'uses' => 'UserProfileController@store',
        'as' => 'Admin.user_profiles.store'
    ]);

    Route::resource('news','NewsController');
    Route::get('news/{id}/destroy', [
        'uses' => 'NewsController@destroy',
        'as' => 'Admin.news.destroy'
    ]);

    Route::get('pdf', 'PdfController@invoice');

    Route::get('Img', [
        'uses' => 'ImagenController@heritageTotal',
        'as' => 'Admin.imgTotal.heritageTotal'
    ]);

    Route::resource('reports','ReportsController');
    Route::get('pdfReport/{id}', 'ReportsController@invoice');
    
    Route::get('UserAsset/createM', [
        'uses' => 'UserAssetController@createM',
        'as' => 'Admin.UserAsset.createM'
    ]);
    Route::get('UserAsset/Retirement', [
        'uses' => 'UserAssetController@createRetirement',
        'as' => 'Admin.UserAsset.createRetirement'
    ]);
    Route::post('UserAsset/Retirement', [
        'uses' => 'UserAssetController@storeRetirement',
        'as' => 'Admin.UserAsset.storeRetirement'
    ]);
    Route::resource('UserAsset', 'UserAssetController');

    Route::get('HeritageTotal', [
        'uses' => 'HeritageTotalController@index',
        'as' => 'Admin.HeritageTotal.index'
    ]);

    Route::resource('HeritageAsset', 'HeritageAssetController');

    Route::resource('HeritageAssetRetirement', 'HeritageAssetRetirementController');

    Route::resource('HeritageProperty', 'HeritagePropertyController');

    Route::resource('UserLoan', 'UserLoanController');

    Route::resource('loanPayment', 'LoanPaymentController');
    Route::get('loanPayment/{id}/create', [
        'uses' => 'LoanPaymentController@create',
        'as' => 'Admin.loanPayment.create'
    ]);
    Route::post('loanPayment/{id}', [
        'uses' => 'LoanPaymentController@store',
        'as' => 'Admin.loanPayment.store'
    ]);
});

Route::get('Inactivo', function () {
    return view('auth.lock');
});

Route::get('recover', function () {
    return view('auth.recover');
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
