<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports', 'App\Http\Controllers\ReportsController@index')->name('reports.index');
Route::get('/reports/create', 'App\Http\Controllers\ReportsController@create')->name('reports.create');
Route::post('/reports', 'App\Http\Controllers\ReportsController@store')->name('reports.store');
Route::get('/reports/{reports}/edit', 'App\Http\Controllers\ReportsController@edit')->name('reports.edit');
Route::put('/reports/{reports}', 'App\Http\Controllers\ReportsController@update')->name('reports.update');
Route::delete('/reports/{reports}', 'App\Http\Controllers\ReportsController@destroy')->name('reports.destroy');
