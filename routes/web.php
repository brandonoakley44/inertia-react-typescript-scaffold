<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

use Inertia\Inertia;

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

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/telephone', [ TestController::class, 'index' ]);



Route::get('home', function(){
  return Inertia::render('Home');
});