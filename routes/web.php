<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

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


Route::get('/connection', [AuthentificationController::class, 'indexConnection']);
Route::get('/register', [AuthentificationController::class, 'indexRegister']);

Route::post('/connectionUser', [AuthentificationController::class, 'login']);
Route::post('/registerUser', [AuthentificationController::class, 'register']);


Route::get('/test', [AnimeController::class, 'index']);

Route::get('/explore', [AnimeController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
