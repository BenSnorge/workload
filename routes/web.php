<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\SocialController;
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
});

Route::controller(CardController::class)->group(function () {
    Route::get('/admin/card', 'card')->middleware(['auth'])->name('card');
    Route::post('/admin/card', 'saveCard');
});

Route::controller(ContentController::class)->group(function () {
    Route::get('/admin/home-content', 'homeContent')->middleware(['auth'])->name('home-content');
    Route::post('/admin/home-content', 'update');
});

Route::controller(NutritionController::class)->group(function () {
    Route::get('/admin/nutrition', 'nutritionContent')->middleware(['auth'])->name('nutrition');
    Route::post('/admin/nutrition', 'update');
});

Route::controller(SocialController::class)->group(function () {
    Route::get('/admin/social', 'socialContent')->middleware(['auth'])->name('social');
    Route::post('/admin/social', 'update');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('admin/all-classes', 'index');
    Route::get('admin/new-class', 'create');
    Route::post('admin/all-classes', 'store');
    Route::get('admin/all-classes/{id}/class-edit', 'edit');
    Route::post('admin/all-classes/{id}', 'update');
    Route::delete('admin/all-classes/{id}/delete', 'delete');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
