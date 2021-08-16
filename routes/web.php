<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SubmissionController;
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

Route::get('/', [ActivityController::class, 'index'])->name('home');
Route::get('/dashboard', [SubmissionController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/update/{id}', [SubmissionController::class, 'update'])->middleware('auth')->name('submission.update');
Route::get('/activity/toggle', [ActivityController::class, 'toggle'])->middleware('auth')->name('activity.toggle');
Route::get('/activity/edit', [ActivityController::class, 'edit'])->middleware('auth')->name('activity.edit');
Route::post('/activity/update', [ActivityController::class, 'update'])->middleware('auth')->name('activity.update');
