<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


//Module Routes
Route::group([
    'prefix' => 'module',
], function () {
    Route::get('/library', [App\Http\Controllers\ModuleController::class, 'libraryModule'])->name('module.library');
    Route::get('/lab', [App\Http\Controllers\ModuleController::class, 'labsModule'])->name('module.lab');
    Route::get('/sport', [App\Http\Controllers\ModuleController::class, 'sportsModule'])->name('module.sports');
    Route::get('/kitchen', [App\Http\Controllers\ModuleController::class, 'kitchenModule'])->name('module.kitchen');
});

