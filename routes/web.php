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
    $name= "Zoki";
    $age = 20;
  return view('welcome',compact('name'), compact('age') );
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars',[CarsController::class, 'cars']);
Route::get('/cars/{id}',[CarsController::class, 'cars:id'])->name('single-car');