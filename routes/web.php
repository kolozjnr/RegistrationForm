<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['guest'])->group(function(){

    Route::get('/', [RegisterController::class, 'index'])->name('Home');
    Route::post('/register', [RegisterController::class, 'register'])->name('Register');
    
    Route::get('/login', [LoginController::class, 'getLogin'])->name('getLogin');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
});

Route::get('/dashboard', [RegisterController::class, 'dashboard'])->middleware(['auth'])->name('Dashboard');
Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');
