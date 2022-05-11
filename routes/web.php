<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BannerController;

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

require __DIR__.'/auth.php';

// ----------------- HOME -----------------
Route::get('/', function () {
    return view('welcome');
});


// --------------- DASHBOARD ---------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// ------------------ ROLE ------------------
Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');


// ----------------- BANNER -----------------
Route::get('/back/banner', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banner/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banner/{id}/update', [BannerController::class, 'update'])->name('banner.update');


// ------- FULLCRUD - ROUTE RESSOURCES ------