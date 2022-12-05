<?php

use App\Http\Controllers\ProfileController;
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

######################################################

## FRONT

Route::get('/', 
    [App\Http\Controllers\Front\FrontPageController::class, 'index'])
    ->name('front.frontpage.index');

Route::get('/categories', 
    [App\Http\Controllers\Front\FrontPageController::class, 'categories'])
    ->name('front.frontpage.categories');

Route::get('/categories/{category}/events', 
    [App\Http\Controllers\Front\FrontPageController::class, 'events'])
    ->name('front.frontpage.events');

Route::get('/categories/{category}/events/{event}/versions', 
    [App\Http\Controllers\Front\FrontPageController::class, 'versions'])
    ->name('front.frontpage.versions');

Route::get('/categories/{category}/events/{event}/versions/{version}/presentations', 
    [App\Http\Controllers\Front\FrontPageController::class, 'presentations'])
    ->name('front.frontpage.presentations');

Route::get('/about', 
    [App\Http\Controllers\Front\FrontPageController::class, 'about'])
    ->name('front.frontpage.about');

######################################################

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

######################################################