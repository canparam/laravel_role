<?php

use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['Admin'])->name('dashboard');

// midd
Route::middleware(['Admin'])->resource('/dashboard/role', RolesController::class);
Route::middleware(['Admin'])->resource('/dashboard/user', UserController::class);

Route::get('/customer', function () {
    return view('customer');
})->middleware('Customer')->name('customer');


require __DIR__ . '/auth.php';
