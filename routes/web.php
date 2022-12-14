<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
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

Route::get('/layouts/about', function () {
    return view('about');
});

Route::get('/layouts/cars',[CarsController::class, 'index']);
Route::get('/layouts/cars/{id}',[CarsController::class, 'show'])->name('single-car');