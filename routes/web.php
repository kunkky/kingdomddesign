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

require __DIR__.'/auth.php';

///admin route

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

///Contributor route

Route::get('contributor/dashboard', function () {
    return view('contributor.dashboard');
})->middleware(['auth:contributor'])->name('contributor.dashboard');

require __DIR__.'/contributorauth.php';
