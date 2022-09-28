<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'login'])->name('auth.login');
//rota para realizar o login na aplicação
Route::post('/login', [UserController::class, 'auth'])->name('login');

Route::post('/', [UserController::class, 'logout'])->name('logout');

//rota da home com os tweets
Route::get('/home', [HomeController::class, 'index'])->name('home');