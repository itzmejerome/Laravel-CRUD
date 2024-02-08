<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\peopleController;

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
Route::group(['middleware' => 'guest'], function () {
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/people', [peopleController::class, 'index'])->name('people.index');
});

Route::get('/people/create', [peopleController::class, 'create'])->name('create.index');
Route::post('/people', [peopleController::class, 'store'])->name('people.store');

Route::get('/people/{people}/edit', [peopleController::class, 'edit'])->name('people.edit');
Route::put('/people/{people}/update', [peopleController::class, 'update'])->name('people.update');
Route::delete('/people/{people}/delete', [peopleController::class, 'delete'])->name('people.delete');

Route::get('/people/search', [peopleController::class, 'search'])->name('people.search');
