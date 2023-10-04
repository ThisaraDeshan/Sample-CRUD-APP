<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\postcontroller;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/Add-New-User',[HomeController::class,'addNewUser'])->name('addNewUser');

route::post('/save-User',[postcontroller::class,'saveUser'])->name('saveUser');

route::get('/updateUser/{id}',[HomeController::class,'updateUser'])->name('updateUser');

route::post('/update/{id}',[postcontroller::class,'update'])->name('update');

route::get('/delete/{id}',[postcontroller::class,'deleteUser'])->name('deleteUser');
