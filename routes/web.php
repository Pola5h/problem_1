<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;





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


Route::get('/',  [ViewController::class, 'UserView'], function () {
    return view('front.index');})->name('home');

    Route::get('/edit/{id}',  [ViewController::class, 'UserEdit'])->name('user.edit');
    Route::post('/update/{id}',  [ViewController::class, 'UserUpdate'])->name('user.update');



    Route::get('/delete/{id}',  [ViewController::class, 'UserDelete'])->name('user.delete');

Auth::routes();




    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('front.index');})->name('dashboard');
