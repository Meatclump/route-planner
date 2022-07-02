<?php

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
})->middleware(['auth'])->name('dashboard');

Route::get('/builds', function () {
    return view('builds');
})->middleware(['auth'])->name('builds');

Route::get('/new-build', function () {
    return view('new-build');
})->middleware(['auth'])->name('New Build');

require __DIR__.'/auth.php';
