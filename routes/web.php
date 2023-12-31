<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Project\CodeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;

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
    return view('pages.home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','userVerified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('code')->controller(CodeController::class)->group(function(){
    Route::get('create','create')->name('code.create');
    Route::get('store','store')->name('code.store');
    // Route::get('check','check')->name('code.check');
    Route::get('{code}','check')->name('code.check');
});
// Route::post('register',[RegisterController::class,'register'])->name('register');
Route::post('message/store',[MessageController::class,'store'])->name('message.store');
Route::post('/profile',[MessageController::class,'messageHistory'])->name('message.history');
Route::get('/verificaiton/sendcode',[VerificationController::class,'sendCode'])->name('sendCode');
Route::post('/verificaiton/store-code',[VerificationController::class,'checkCode'])->name('checkCode');
Route::get('/verificaiton',[VerificationController::class,'index'])->name('verification.index');

require __DIR__.'/auth.php';
