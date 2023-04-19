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
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

//chat
Route::get('/dashboard/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('chat.index');
Route::post('/dashboard/chats', [App\Http\Controllers\ChatController::class, 'store'])->name('chat.store');

//Feedback
Route::get('/dashboard/feedback', [App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/dashboard/feedbacks', [App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.store');


//Module Routes
Route::group([
    'prefix' => 'module',
], function () {
    Route::get('/library', [App\Http\Controllers\ModuleController::class, 'libraryModule'])->name('modules.library');
    Route::get('/lab', [App\Http\Controllers\ModuleController::class, 'labsModule'])->name('modules.lab');
    Route::get('/sport', [App\Http\Controllers\ModuleController::class, 'sportsModule'])->name('modules.sports');
    Route::get('/cafeteria', [App\Http\Controllers\ModuleController::class, 'cafeteriaModule'])->name('modules.cafeteria');
    Route::get('/classes', [App\Http\Controllers\ModuleController::class, 'classesModule'])->name('modules.classes');
    Route::get('/update', [App\Http\Controllers\ModuleController::class, 'progressIncrease'])->name('modules.progress');
});



//Admin Routes
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth',]
], function () {
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
    Route::get('/users/export', [App\Http\Controllers\AdminController::class, 'exportPdf'])->name('export.users');
});

