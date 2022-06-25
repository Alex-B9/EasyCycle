<?php

use App\Http\Controllers\PositionController;
use App\Http\Controllers\TrashPositionController;
use App\Http\Controllers\TrashTypeController;
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

Route::get('/position', [PositionController::class,'index'])->name('position.index');
Route::get('/trashPosition', [TrashPositionController::class, 'index'])->name('trashPosition.index');
Route::get('/trashType', [TrashTypeController::class, 'index'])->name('trashType.index');
