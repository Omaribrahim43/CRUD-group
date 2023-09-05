<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'index']);

Route::get('/create', function() {
    return view('create');
});

Route::post('/create', [PostController::class, 'create'])->name('create.submit');

Route::get('/update/{id}', [PostController::class, 'update'])->name('update.view');
Route::post('/update', [PostController::class, 'updateData'])->name('update.submit');

Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('delete');
