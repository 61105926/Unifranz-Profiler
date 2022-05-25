<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Password;

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

Route::get('/', [PasswordController::class, 'index']);
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome')->middleware('profile');
Route::post('/register', [ProfileController::class, 'store'])->name('profiler.store');
Route::post('/test-completado', [ProfileController::class, 'thanksPage'])->name('thanks');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [PasswordController::class, 'store'])->name('password.store');
