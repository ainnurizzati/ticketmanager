<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/settings', function () {
    return view('pages.settings');
});


Route::resource('games', 'App\Http\Controllers\GameController');

Route::resource('projects', ProjectController::class);

