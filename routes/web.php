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

Route::group(['middleware' => ['localize'], 'prefix' => LaravelLocalization::setLocale()], function() {
    Route::get('/', 'FrontController@index');
    Route::get('internet-magazin', 'FrontController@e_commerce');
    Route::get('razrabotka-sajtov', 'FrontController@website');
    Route::get('razrabotka-saita-vizitki', 'FrontController@razrabotkaSaitaVizitki');
    Route::get('smm', 'FrontController@smm');
    Route::get('portfolio', 'FrontController@portfolio');
    Route::get('portfolio/{project_name}', 'FrontController@portfolioItem');
    Route::get('contacts', 'FrontController@contacts');
    Route::get('seo-optimizatsiya', 'FrontController@seo');
    Route::get('kontekstnaya-reklama', 'FrontController@context');
    Route::get('mobapps', 'FrontController@mobapps');
    Route::get('branding', 'FrontController@branding');
    Route::get('brief', 'FrontController@brief');
    Route::get('brief-seo', 'FrontController@briefSeo');
    Route::get('brief-style', 'FrontController@briefStyle');
    Route::get('razrabotka-korporativnogo-sajta', 'FrontController@razrabotkaKorporativnogoSajta');
});

Route::get('email_test', 'FrontController@emailtest');
Route::post('mail/send', 'MailController@sendMail');
Route::post('brief/send', 'MailController@sendBrief');
