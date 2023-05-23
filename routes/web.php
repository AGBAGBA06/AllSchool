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

// FRONTEND CONTROLLER
// Route::get('/','App\Http\Controllers\FrontendController@home');
Route::get('about/','App\Http\Controllers\FrontendController@about');
Route::get('blog_details/','App\Http\Controllers\FrontendController@blog_details');
Route::get('blog/','App\Http\Controllers\FrontendController@blog');
Route::get('comment/','App\Http\Controllers\FrontendController@comment');
Route::get('condition/','App\Http\Controllers\FrontendController@condition');
Route::get('contact/','App\Http\Controllers\FrontendController@contact');
Route::get('faq/','App\Http\Controllers\FrontendController@faq');
Route::get('/ecoles_details/{id}','App\Http\Controllers\FrontendController@ecoles_details');
Route::get('login/','App\Http\Controllers\FrontendController@login');
Route::get('register/','App\Http\Controllers\FrontendController@register');
Route::get('politique_securite/','App\Http\Controllers\FrontendController@politique_securite');
Route::get('politique/','App\Http\Controllers\FrontendController@politique');
Route::get('pourquoi/','App\Http\Controllers\FrontendController@pourquoi');
Route::get('preference/','App\Http\Controllers\FrontendController@preference');
Route::get('search/','App\Http\Controllers\FrontendController@searchecole');
Route::get('/select_by_cat/{name}','App\Http\Controllers\FrontendController@select_by_cat');
Route::get('pdf/', 'App\Http\Controllers\FrontendController@pdf');

// DASHBOARD CONTROLLER
Route::post('/sauverecole','App\Http\Controllers\DashboardController@sauverecole');
Route::post('/modifierecole','App\Http\Controllers\DashboardController@modifierecole');
Route::get('/deleteecole/{id}','App\Http\Controllers\DashboardController@deleteecole');
Route::get('/desactiver_ecole/{id}','App\Http\Controllers\DashboardController@desactiver_ecole');
Route::post('/sauverprofile','App\Http\Controllers\DashboardController@sauverprofile');
Route::get('/activer_ecole/{id}','App\Http\Controllers\DashboardController@activer_ecole');


Route::get('dashboad/','App\Http\Controllers\DashboardController@dashboad');
Route::get('creer_ecole/','App\Http\Controllers\DashboardController@creer_ecole');
Route::get('/editecole/{id}','App\Http\Controllers\DashboardController@editecole');
Route::get('ecoles/','App\Http\Controllers\DashboardController@ecoles');
Route::get('users_profile/','App\Http\Controllers\DashboardController@users_profile');



Auth::routes();

// Route::get('/', [App\Http\Controllers\FrontendController::class, '/'])->name('/');
Route::get('/','App\Http\Controllers\FrontendController@home');
