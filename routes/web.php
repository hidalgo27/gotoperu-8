<?php

use App\Http\Controllers\Page\HomepageController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@index',
    'as' => 'home_path'
]);

//detail
Route::get('/paquetes/{url}', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@detail',
    'as' => 'detail_path',
]);

Route::get('/load/packages', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@load',
    'as' => 'load_path',
]);
Route::get('/load/packages-all', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@load_all',
    'as' => 'load_all_path',
]);

Route::post('/agregar', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@agregar',
    'as' => 'agregar_path',
]);

//tours
Route::get('/tours', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@tours',
    'as' => 'tours_path',
]);

//guest
Route::get('/guest-review', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@review',
    'as' => 'review_path',
]);

//guest
Route::get('/contact-us', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@contact',
    'as' => 'contact_path',
]);

//packages

Route::get('/packages/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@packages',
    'as' => 'packages_path',
]);

//destinations
Route::get('/destination', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@destination',
    'as' => 'destination_path',
]);
Route::get('/destination/{url}', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@destination_show',
    'as' => 'destination_show_path',
]);

//about
Route::get('/about-us/', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@about',
    'as' => 'about_path',
]);

//luxury
Route::get('/packages/category/luxury', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@luxury',
    'as' => 'luxury_path',
]);

//social
Route::get('/social-responsability', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@social',
    'as' => 'social_path',
]);

//faq
Route::get('/frequently-asked-questions', [
    'uses' => 'App\Http\Controllers\Page\HomepageController@faq',
    'as' => 'faq_path',
]);

//form inquire
Route::get('/loaddestinos/destinos', [
    'uses' => 'App\Http\Controllers\Page\Form\FormpageController@destinoform',
    'as' => 'destinoform_path',
]);

Route::get('/loadcategory/category', [
    'uses' => 'App\Http\Controllers\Page\Form\FormpageController@categoryform',
    'as' => 'categoryform_path',
]);

Route::post('/formulario-diseno', [
    'uses' => 'App\Http\Controllers\Page\Form\FormpageController@formulario_diseno',
    'as' => 'formulario_diseno_path',
]);
