<?php

use App\Http\Controllers\HomeController;
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
    return view('pages/home');
});
Route::get('/memberships', function () {
    return view('pages/memberships');
});
Route::get('/trainers', function () {
    return view('pages/trainers');
});
Route::get('/nutrition', function () {
    return view('pages/nutrition');
});
Route::get('/classes', function () {
    return view('pages/classes');
});
Route::get('/pages/login', function () {
    return view('pages/login');
});
Route::get('/pages/register', function () {
    return view('pages/register');
});
Route::get('/admin/home-page', function () {
    return view('admin/home-page');
})->middleware(['auth'])->name('home-page');

Route::controller(HomeController::class)->group(function () {
    Route::post('/admin/home-page', 'store');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
