<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

/* Route::get('/', [HomeController::class, 'index']);
 */

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
/* Route::get('/admin/home-page', function () {
    return view('admin/home-page');
})->middleware(['auth'])->name('home-page'); */

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/pages/classes', 'index');
    Route::get('/layouts/main', 'index');
    Route::post('/admin/home-page', 'saveHome');
    Route::get('/admin/home-page', 'general')->middleware(['auth'])->name('home-page');
    Route::get('/admin/card', 'card')->middleware(['auth'])->name('card');
});

/* Route::controller(NavigationController::class)->group(function () {
    Route::post('/admin/home-page', 'saveNav');
}); */


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
