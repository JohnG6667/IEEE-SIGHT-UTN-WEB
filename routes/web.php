<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/', [IndexController::class, 'index'])->name('index.index');

Route::get('about', [AboutController::class, 'index'])->name('index.about');

Route::get('members',[MembersController::class,'index'])->name('index.members');

Route::get('contactUs',[ContactUsController::class,'index'])->name('index.contactUs');

//EVENTOS

Route::get('events/{event}', [EventController::class, 'show'])->name('events.show');


