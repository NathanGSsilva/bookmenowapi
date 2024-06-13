<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class, "home"]);
Route::get('/sobre-nos',[SiteController::class, "sobreNos"]);
Route::get('/contato',[SiteController::class, "contato"]);

Route::get('/admin/usuarios',[UsuarioController::class, "index"]);
Route::get('/admin/usuarios/{id}', [UsuarioController::class, "show"]);

Route::get('/admin/dashboard',[DashboardController::class, "dashboard"]);
