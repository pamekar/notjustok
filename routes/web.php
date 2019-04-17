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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/search', function () {
    abort(401);
})->name('search');
Route::get('/settings', function () {
    abort(401);
})->name('settings');
Route::get('/accounts', function () {
    abort(401);
})->name('accounts');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('records/json', 'RecordController@json')->name('records.json');
    Route::get('records/advanced', 'RecordController@advanced')
        ->name('records.advanced');
    Route::get('records/search', 'RecordController@search')
        ->name('records.search');
    Route::get('uploads/json', 'UploadController@json')->name('uploads.json');
    Route::resources([
        'records' => 'RecordController',
        'uploads' => 'UploadController'
    ]);
});