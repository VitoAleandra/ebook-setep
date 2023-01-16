<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpusController;

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

Route::get('/', [PerpusController::class, 'landing'] );
Route::get('/register', [PerpusController::class, 'register'] );
Route::POST('/register/input', [PerpusController::class, 'registerAccount'])->name('register-input');
Route::get('/login', [PerpusController::class, 'login'] );
Route::post('/login/auth', [PerpusController::class, 'auth'])->name('login.auth');
Route::get('/dashboardUser', [PerpusController::class, 'dashboardUser'] );
