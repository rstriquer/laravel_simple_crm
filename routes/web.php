<?php

use App\Http\Controllers\ContactDeleteController;
use App\Http\Controllers\ContactGetFormController;
use App\Http\Controllers\ContactPostEditFormController;
use App\Http\Controllers\PublicContactIndexController;
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


Route::get('/', PublicContactIndexController::class)->name('public.index');
Route::get('/contact/{id?}', ContactGetFormController::class)->name('contact.show');
Route::post('/contact/{id}', ContactPostEditFormController::class)->name('contact.edit');
Route::post('/contact/delete', ContactDeleteController::class)->name('contact.delete');
