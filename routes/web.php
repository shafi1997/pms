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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('admin')->namespace('Backend')->group(function(){
    Route::get('/login','AuthController@loginShow')->name('admin.login');
    Route::post('/login','AuthController@loginProcess');
    Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');

});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
