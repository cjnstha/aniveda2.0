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
//     return view('frontend.index');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//FrontEnd Routes//
Route::namespace('Front')->group(function(){
    Route::get('/','IndexController@index');
    Route::get('/about-us','AboutUsController@about');
    Route::get('/services','ServiceController@service');
    Route::get('/portfolios','WorkController@portfolio');

});
