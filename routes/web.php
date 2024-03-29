<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register', [RegisterController::class, 'getregister'])->name('register');
Route::post('/register', [RegisterController::class, 'postregister']);


Route::get('/login', [LoginController::class, 'getlogin'])->name('login');
Route::post('login', [LoginController::class, 'postlogin']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/check-database-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Connected successfully to the database!";
    } catch (\Exception $e) {
        return "Failed to connect to the database: " . $e->getMessage();
    }
});
