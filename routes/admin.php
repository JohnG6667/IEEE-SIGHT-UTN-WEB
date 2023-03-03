<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
|
| Aquí es donde se registrarán las rutas para las páginas de administración. 
| Estas rutas son cargadas por el RouteServiceProvider anteriormente definido
| en la dirección app/Providers/RouteServiceProvider.php
|
*/


//--Ruta Administración Index--//
Route::get('', [HomeController::class, 'index']);

//--Ruta Administración Categorías--//
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');


//--Ruta Administración Eventos--//
Route::resource('events', EventController::class)->except('show')->names('admin.events');
