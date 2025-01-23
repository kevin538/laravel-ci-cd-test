<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

Route::redirect('/', '/login');
Route::get('/webcertificate/{valeurRh}', [App\Http\Controllers\PDFController::class, 'webcertificate'])->name('webcertificate');
Route::get('/webreport/{valeurRh}', [App\Http\Controllers\PDFController::class, 'webreport'])->name('webreport');
Auth::routes();
Route::get('/pdf', [App\Http\Controllers\HomeController::class, 'pdf'])->name('pdf');
Route::get('/deleted/reportdeleted', 'App\Http\Controllers\reportcontroller@reportdeleted')->name('reportdeleted');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    /* Routes pour les enregistrement d'articles */
    Route::get('/report', 'App\Http\Controllers\reportcontroller@index')->name('report');
    Route::get('/report12', 'App\Http\Controllers\reportcontroller@indexn')->name('reportn');
    Route::get('/info', 'App\Http\Controllers\reportcontroller@info')->name('info');

    Route::post('/sotre', 'App\Http\Controllers\reportcontroller@director')->name('director');


    Route::post('/store', 'App\Http\Controllers\reportcontroller@store')->name('store');

    Route::get('/reportpdf/{id}', [PDFController::class, 'generatePDF'])->name('reportpdf');
    Route::get('/vaccinepdf/{id}', [PDFController::class, 'vaccinepdf'])->name('vaccinepdf');

    Route::get('/searchresult', 'App\Http\Controllers\reportcontroller@search')->name('search');
    Route::get('/deleted/{id}', 'App\Http\Controllers\reportcontroller@deleted')->name('deleted');
    Route::get('/restaurrer/{id}', 'App\Http\Controllers\reportcontroller@restore')->name('restore');

    Route::get('/completetly/{id}', 'App\Http\Controllers\reportcontroller@completetly')->name('completetly');
});