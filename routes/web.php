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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/plantillas', function () {
    return view('plantillas');
});

/*Route::get('/ok', function () {
    return view('ok');
});*/


Route::post('/pdf', 'EditorController@conviertepdf');

Route::post('/pdfportada', 'EditorController@conviertepdfportada');


Route::get('/editorsmartbook/{page}/{type}', 'EditorController@index')->name('index');


Route::get('/version2/{page}/{type}/{medida}', 'EditorController@version2')->name('version2');


Route::get('/ok/{page}/{type}/{medida}/{lomo}', 'EditorController@ok')->name('ok');




