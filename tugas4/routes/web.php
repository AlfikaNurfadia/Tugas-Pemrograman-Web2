<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


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


Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');


Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/films', [FilmController::class, 'index'])->name('films');

Route::get('/tambahfilm', [FilmController::class, 'tambahfilm'])->name('tambahfilm');
Route::post('/insertfilm', [FilmController::class, 'insertfilm'])->name('insertfilm');

Route::get('/tampilkandata/{id}', [FilmController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [FilmController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [FilmController::class, 'delete'])->name('delete');
Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');



