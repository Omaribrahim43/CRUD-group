<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [ViewController::class, 'index']);

Route::get('/create', [PostController::class, 'index'])->name('create.view');
Route::post('/create/submit', [PostController::class, 'create'])->name('create.submit');