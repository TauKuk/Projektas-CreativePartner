<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsAPIController;

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

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('clear-compiled');
    Artisan::call('config:clear');
    
    return "PAVYKO";
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/users/{user}/edit', [UserController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

Route::get('/{user}/events', [EventController::class, 'index'])->name('events.index');
Route::get('/{user}/events/create', [EventController::class, 'create']);
Route::post('/{user}/events', [EventController::class, 'store']);
Route::get('/{user}/events/{event}', [EventController::class, 'show']);
Route::get('/{user}/events/{event}/edit', [EventController::class, 'edit']);
Route::put('/{user}/events/{event}', [EventController::class, 'update']);
Route::delete('/{user}/events/{event}', [EventController::class, 'destroy']);

Route::get('/storage/uploads/{picture}', [EventsAPIController::class, 'image']);