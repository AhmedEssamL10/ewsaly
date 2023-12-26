<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Project\CodeController;
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

Route::prefix('code')->controller(CodeController::class)->group(function(){
    Route::get('create','create')->name('code.create');
    Route::get('store','store')->name('code.store');
    // Route::get('check','check')->name('code.check');
    Route::get('{code}','check')->name('code.check');
});
Route::post('register',[RegisterController::class,'register'])->name('register');
